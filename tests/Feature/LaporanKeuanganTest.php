<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\TransaksiSatuan;
use App\Models\Pengeluaran;

class LaporanKeuanganTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Asumsi user admin disetup untuk kebutuhan otentikasi
        $this->admin = User::factory()->create([
            'auth' => 'SuperAdmin', // Sesuaikan dengan role yang ada
        ]);
        $this->actingAs($this->admin);
    }

    /**
     * Test laporan hanya menampilkan transaksi yang sudah Lunas.
     */
    public function test_laporan_hanya_menghitung_transaksi_lunas()
    {
        // Transaksi Lunas
        Transaksi::factory()->create([
            'status_order' => 'Done',
            'status_payment' => 'Lunas',
            'harga_akhir' => 50000,
            'jenis_pembayaran' => 'Cash',
            'created_at' => now(),
        ]);

        // Transaksi Belum Lunas (Harus diabaikan oleh laporan keuangan)
        Transaksi::factory()->create([
            'status_order' => 'Done',
            'status_payment' => 'Belum Lunas',
            'harga_akhir' => 45000,
            'jenis_pembayaran' => 'Cash',
            'created_at' => now(),
        ]);

        // Asumsi route fitur laporan keuangan baru
        $response = $this->get('/laporan/harian?tanggal=' . now()->toDateString());

        $response->assertStatus(200);
        // Memastikan jumlah yang terhitung hanya yang Lunas (50000)
        $response->assertSee('50000');
        $response->assertDontSee('95000'); // Bukan penjumlahan keduanya
    }

    /**
     * Test pemisahan metode pembayaran Cash dan Transfer.
     */
    public function test_laporan_memisahkan_pemasukan_cash_dan_transfer()
    {
        // 2 Transaksi Lunas via Cash (Total: 40.000)
        Transaksi::factory()->count(2)->create([
            'status_payment' => 'Lunas',
            'harga_akhir' => 20000,
            'jenis_pembayaran' => 'Cash'
        ]);

        // 1 Transaksi Lunas via Transfer (Total: 75.000)
        Transaksi::factory()->create([
            'status_payment' => 'Lunas',
            'harga_akhir' => 75000,
            'jenis_pembayaran' => 'Transfer'
        ]);

        // Transaksi Satuan Lunas via Transfer (Asumsi kolom jenis_pembayaran sudah ditambah)
        TransaksiSatuan::factory()->create([
            'status_payment' => 'Lunas',
            'harga_akhir' => 25000,
            'jenis_pembayaran' => 'Transfer'
        ]);

        $response = $this->get('/laporan/bulanan?bulan=' . now()->month . '&tahun=' . now()->year);

        $response->assertStatus(200);
        
        // Asumsi view laporan yang direfactor akan merender variable berikut 
        // yang dipisah dalam view (misal ada kolom/text untuk masing-masing item)
        $response->assertViewHas('total_cash', function ($total_cash) {
            return $total_cash === 40000;
        });

        $response->assertViewHas('total_transfer', function ($total_transfer) {
            return $total_transfer === 100000; // 75k (kiloan) + 25k (satuan)
        });
    }

    /**
     * Test Pengeluaran berdasarkan metode pembayaran (Upgrade).
     */
    public function test_pengeluaran_tercatat_berdasarkan_metode_pembayaran()
    {
        // Pengeluaran lewat Kas (Cash)
        Pengeluaran::factory()->create([
            'jumlah' => 1,
            'harga' => 15000,
            'total' => 15000,
            'metode_pembayaran' => 'Cash',
            'tanggal' => now()->toDateString()
        ]);

        // Pengeluaran lewat Rekening (Transfer)
        Pengeluaran::factory()->create([
            'jumlah' => 1,
            'harga' => 60000,
            'total' => 60000,
            'metode_pembayaran' => 'Transfer',
            'tanggal' => now()->toDateString()
        ]);

        $response = $this->get('/pengeluaran');

        $response->assertStatus(200);
        // Memastikan sistem bisa memilah dan menampilkan data pengeluaran cash vs transfer
        $response->assertSee('Cash');
        $response->assertSee('Transfer');
        $response->assertSee('15000');
        $response->assertSee('60000');
    }
}
