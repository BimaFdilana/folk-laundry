<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Transaksi, User, Harga, Karyawan};
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Seeder untuk data transaksi dummy.
     * Membuat 30 transaksi acak dalam 3 bulan terakhir.
     */
    public function run()
    {
        $customers = User::where('auth', 'Customer')->get();
        $karyawans = Karyawan::all();
        $hargas    = Harga::where('status', 1)->where('harga', '>', 0)->get();

        if ($customers->isEmpty() || $karyawans->isEmpty() || $hargas->isEmpty()) {
            $this->command->warn('TransaksiSeeder: Customer, Karyawan, atau Harga belum ada. Jalankan seeder lain dulu.');
            return;
        }

        $pewangis    = ['Downy', 'So Klin', 'Molto', 'Komfort', 'Vanish', 'Attack'];
        $jenisBayar  = ['Tunai', 'Transfer']; // sesuai enum di migration
        $statuses    = ['Antrian', 'Process', 'Done', 'Delivery'];
        $catatan     = ['Pisahkan berwarna', 'Jangan dikucek', '-', '-', 'Hati-hati baju sutra'];

        $counter = 1;

        for ($i = 0; $i < 30; $i++) {
            $tglTransaksi = Carbon::now()->subDays(rand(1, 90));

            $customer = $customers->random();
            $karyawan = $karyawans->random();
            $harga    = $hargas->random();

            $kg           = rand(1, 15);
            $lembar       = rand(3, 40);
            $totalHarga   = $kg * (int) $harga->harga;
            $disc         = (rand(0, 3) === 0) ? rand(1, 3) * 5000 : 0;
            $hargaAkhir   = max(0, $totalHarga - $disc);

            $statusOrder   = $statuses[array_rand($statuses)];
            $statusPayment = ($statusOrder === 'Delivery') ? 'Success' : (rand(0, 1) ? 'Success' : 'Pending');
            $tglAmbil      = ($statusOrder === 'Delivery') ? $tglTransaksi->copy()->addDays(rand(1, 5))->format('Y-m-d H:i:s') : null;

            $invoiceDate = $tglTransaksi->format('ymd');
            $invoice     = 'LC-' . $invoiceDate . '-' . str_pad($counter, 3, '0', STR_PAD_LEFT);
            $counter++;

            // Skip jika invoice sudah ada
            if (Transaksi::where('invoice', $invoice)->exists()) continue;

            Transaksi::create([
                'invoice'            => $invoice,
                'customer_id'        => $customer->id,
                'customer'           => $customer->name,
                'email_customer'     => $customer->email,
                'tgl_transaksi'      => $tglTransaksi->toDateString(),
                'status_order'       => $statusOrder,
                'status_payment'     => $statusPayment,
                'harga_id'           => $harga->id,
                'kg'                 => $kg,
                'jumlah_lembar_baju' => $lembar,
                'hari'               => $harga->hari,
                'harga'              => $harga->harga,
                'disc'               => $disc > 0 ? $disc : null,
                'harga_akhir'        => $hargaAkhir,
                'jenis_pembayaran'   => $jenisBayar[array_rand($jenisBayar)],
                'jenis_pewangi'      => $pewangis[array_rand($pewangis)],
                'catatan_admin'      => $catatan[array_rand($catatan)],
                'tgl'                => $tglTransaksi->day,
                'bulan'              => $tglTransaksi->month,
                'tahun'              => $tglTransaksi->year,
                'tgl_ambil'          => $tglAmbil,
                'info_pembayaran'    => 'Total: Rp ' . number_format($hargaAkhir, 0, ',', '.'),
                'created_at'         => $tglTransaksi,
                'updated_at'         => $tglTransaksi,
            ]);
        }

        $this->command->info('TransaksiSeeder: 30 transaksi dummy berhasil dibuat.');
    }
}

