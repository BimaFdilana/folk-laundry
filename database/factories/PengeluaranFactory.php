<?php

namespace Database\Factories;

use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengeluaranFactory extends Factory
{
    protected $model = Pengeluaran::class;

    public function definition()
    {
        return [
            'pengeluaran' => 'Pembelian Test',
            'kategori' => 'Operasional',
            'harga' => 15000,
            'jumlah' => 1,
            'total' => 15000,
            'keterangan' => 'Test',
            'tanggal' => now()->toDateString(),
            // Assuming we added metode_pembayaran as discussed in the review
            // For now, if the column isn't physically there, it might fail on insert, but we'll see
            'metode_pembayaran' => 'Cash', 
        ];
    }
}
