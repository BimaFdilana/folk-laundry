<?php

namespace Database\Factories;

use App\Models\TransaksiSatuan;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiSatuanFactory extends Factory
{
    protected $model = TransaksiSatuan::class;

    public function definition()
    {
        return [
            'invoice' => 'INVS-' . $this->faker->unique()->numberBetween(1000, 9999),
            'karyawan_id' => 1,
            'customer_id' => 1,
            'customer' => $this->faker->name,
            'tgl_transaksi' => now(),
            'status_order' => 'Done',
            'status_payment' => 'Lunas',
            'harga_akhir' => 25000,
            // Assuming we added jenis_pembayaran as discussed in the review
            'jenis_pembayaran' => 'Cash',
            'tgl' => now()->day,
            'bulan' => now()->month,
            'tahun' => now()->year,
        ];
    }
}
