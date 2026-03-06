<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paket;

class PaketSeeder extends Seeder
{
    /**
     * Seeder untuk data paket langganan laundry.
     * Field: kg, harga, kategori
     */
    public function run()
    {
        $pakets = [
            // Paket Regular
            ['kg' => '10',  'harga' => 60000,  'kategori' => 'PAKET'],
            ['kg' => '20',  'harga' => 110000, 'kategori' => 'PAKET'],
            ['kg' => '30',  'harga' => 160000, 'kategori' => 'PAKET'],
            ['kg' => '50',  'harga' => 250000, 'kategori' => 'PAKET'],
            ['kg' => '100', 'harga' => 450000, 'kategori' => 'PAKET'],

            // Paket Bayi
            ['kg' => '10',  'harga' => 80000,  'kategori' => 'LAUNDRY BAYI'],
            ['kg' => '20',  'harga' => 150000, 'kategori' => 'LAUNDRY BAYI'],

            // Paket Syariah
            ['kg' => '10',  'harga' => 75000,  'kategori' => 'LAUNDRY SYARIAH'],
            ['kg' => '20',  'harga' => 140000, 'kategori' => 'LAUNDRY SYARIAH'],
        ];

        foreach ($pakets as $data) {
            Paket::firstOrCreate(
                ['kg' => $data['kg'], 'kategori' => $data['kategori']],
                ['harga' => $data['harga']]
            );
        }
    }
}
