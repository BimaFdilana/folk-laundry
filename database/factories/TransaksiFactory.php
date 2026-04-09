<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    protected $model = Transaksi::class;

    public function definition()
    {
        return [
            'invoice' => 'INV-' . $this->faker->unique()->numberBetween(1000, 9999),
            'karyawan_id' => 1, // default or factory later
            'customer_id' => 1,
            'customer' => $this->faker->name,
            'tgl_transaksi' => now(),
            'status_order' => 'Done',
            'status_payment' => 'Lunas',
            'harga_id' => 1,
            'kg' => 2,
            'jumlah_lembar_baju' => 10,
            'hari' => '2',
            'harga' => 10000,
            'harga_akhir' => 20000,
            'jenis_pembayaran' => 'Cash',
            'tgl' => now()->day,
            'bulan' => now()->month,
            'tahun' => now()->year,
        ];
    }
}
