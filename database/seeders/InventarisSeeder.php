<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Inventaris, Kategori};

class InventarisSeeder extends Seeder
{
    /**
     * Seeder untuk data inventaris laundry.
     * Bergantung pada KategoriSeeder — jalankan setelah KategoriSeeder.
     */
    public function run()
    {
        // Ambil ID kategori dari database
        $mesin      = Kategori::where('nama', 'Mesin Laundry')->first();
        $kimia      = Kategori::where('nama', 'Bahan Kimia')->first();
        $kebersihan = Kategori::where('nama', 'Peralatan Kebersihan')->first();
        $packing    = Kategori::where('nama', 'Perlengkapan Packing')->first();
        $furnitur   = Kategori::where('nama', 'Furnitur & Perlengkapan Toko')->first();
        $atk        = Kategori::where('nama', 'Alat Tulis & Administrasi')->first();

        $inventaris = [

            // === MESIN LAUNDRY ===
            [
                'nama_barang' => 'Mesin Cuci Front Loading 10kg',
                'jenis'       => 'Tetap',
                'kategori_id' => $mesin?->id,
                'satuan'      => 'Unit',
                'stok'        => 3,
                'harga'       => 4500000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Mesin Pengering (Dryer) 8kg',
                'jenis'       => 'Tetap',
                'kategori_id' => $mesin?->id,
                'satuan'      => 'Unit',
                'stok'        => 2,
                'harga'       => 3500000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Setrika Uap Industri',
                'jenis'       => 'Tetap',
                'kategori_id' => $mesin?->id,
                'satuan'      => 'Unit',
                'stok'        => 4,
                'harga'       => 850000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Meja Setrika',
                'jenis'       => 'Tetap',
                'kategori_id' => $mesin?->id,
                'satuan'      => 'Unit',
                'stok'        => 4,
                'harga'       => 350000,
                'kondisi'     => 'Baik',
            ],

            // === BAHAN KIMIA ===
            [
                'nama_barang' => 'Deterjen Cair (Drum 20L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Drum',
                'stok'        => 5,
                'harga'       => 250000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Softener / Pelembut (Drum 20L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Drum',
                'stok'        => 4,
                'harga'       => 180000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Pewangi Downy (5L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Botol',
                'stok'        => 10,
                'harga'       => 85000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Pewangi So Klin (5L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Botol',
                'stok'        => 8,
                'harga'       => 75000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Pemutih / Bleach (5L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Botol',
                'stok'        => 6,
                'harga'       => 45000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Penghilang Noda (1L)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kimia?->id,
                'satuan'      => 'Botol',
                'stok'        => 12,
                'harga'       => 35000,
                'kondisi'     => 'Baik',
            ],

            // === PERALATAN KEBERSIHAN ===
            [
                'nama_barang' => 'Ember Plastik Besar',
                'jenis'       => 'Tetap',
                'kategori_id' => $kebersihan?->id,
                'satuan'      => 'Buah',
                'stok'        => 10,
                'harga'       => 35000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Sikat Pakaian',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kebersihan?->id,
                'satuan'      => 'Buah',
                'stok'        => 15,
                'harga'       => 12000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Keranjang Laundry Besar',
                'jenis'       => 'Tetap',
                'kategori_id' => $kebersihan?->id,
                'satuan'      => 'Buah',
                'stok'        => 8,
                'harga'       => 75000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Gantungan Baju',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $kebersihan?->id,
                'satuan'      => 'Lusin',
                'stok'        => 20,
                'harga'       => 18000,
                'kondisi'     => 'Baik',
            ],

            // === PERLENGKAPAN PACKING ===
            [
                'nama_barang' => 'Plastik Packing Laundry (100pcs)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $packing?->id,
                'satuan'      => 'Pak',
                'stok'        => 30,
                'harga'       => 25000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Label Stiker Invoice',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $packing?->id,
                'satuan'      => 'Roll',
                'stok'        => 10,
                'harga'       => 15000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Tali Rafia',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $packing?->id,
                'satuan'      => 'Gulung',
                'stok'        => 5,
                'harga'       => 12000,
                'kondisi'     => 'Baik',
            ],

            // === FURNITUR & PERLENGKAPAN TOKO ===
            [
                'nama_barang' => 'Meja Kasir',
                'jenis'       => 'Tetap',
                'kategori_id' => $furnitur?->id,
                'satuan'      => 'Unit',
                'stok'        => 1,
                'harga'       => 1200000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Kursi Plastik',
                'jenis'       => 'Tetap',
                'kategori_id' => $furnitur?->id,
                'satuan'      => 'Buah',
                'stok'        => 6,
                'harga'       => 85000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Rak Baju / Rak Display',
                'jenis'       => 'Tetap',
                'kategori_id' => $furnitur?->id,
                'satuan'      => 'Unit',
                'stok'        => 3,
                'harga'       => 450000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Timbangan Digital 20kg',
                'jenis'       => 'Tetap',
                'kategori_id' => $furnitur?->id,
                'satuan'      => 'Unit',
                'stok'        => 2,
                'harga'       => 250000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'CCTV',
                'jenis'       => 'Tetap',
                'kategori_id' => $furnitur?->id,
                'satuan'      => 'Unit',
                'stok'        => 2,
                'harga'       => 350000,
                'kondisi'     => 'Baik',
            ],

            // === ALAT TULIS & ADMINISTRASI ===
            [
                'nama_barang' => 'Nota / Bon Laundry (50 lembar)',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $atk?->id,
                'satuan'      => 'Buku',
                'stok'        => 10,
                'harga'       => 5000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Pulpen',
                'jenis'       => 'Habis Pakai',
                'kategori_id' => $atk?->id,
                'satuan'      => 'Lusin',
                'stok'        => 3,
                'harga'       => 24000,
                'kondisi'     => 'Baik',
            ],
            [
                'nama_barang' => 'Printer Struk Thermal',
                'jenis'       => 'Tetap',
                'kategori_id' => $atk?->id,
                'satuan'      => 'Unit',
                'stok'        => 1,
                'harga'       => 650000,
                'kondisi'     => 'Baik',
            ],
        ];

        foreach ($inventaris as $data) {
            if (!$data['kategori_id']) continue; // skip jika kategori tidak ditemukan

            Inventaris::firstOrCreate(
                ['nama_barang' => $data['nama_barang']],
                $data
            );
        }

        $this->command->info('InventarisSeeder: ' . count($inventaris) . ' item inventaris berhasil dibuat.');
    }
}
