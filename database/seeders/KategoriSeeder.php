<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Seeder untuk kategori inventaris laundry.
     */
    public function run()
    {
        $kategoris = [
            'Mesin Laundry',
            'Bahan Kimia',
            'Peralatan Kebersihan',
            'Perlengkapan Packing',
            'Furnitur & Perlengkapan Toko',
            'Alat Tulis & Administrasi',
        ];

        foreach ($kategoris as $nama) {
            Kategori::firstOrCreate(['nama' => $nama]);
        }
    }
}
