<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Harga;

class HargaSeeder extends Seeder
{
    /**
     * Seeder untuk data layanan / harga laundry.
     * Field: jenis, kg (min kg), harga (per kg), status (1=aktif), hari (estimasi), nama
     */
    public function run()
    {
        $layanan = [
            // Layanan Regular
            [
                'nama'   => 'Reguler',
                'jenis'  => 'REGULAR',
                'kg'     => '1',
                'harga'  => '7000',
                'hari'   => '3',
                'status' => '1',
            ],
            [
                'nama'   => 'Express',
                'jenis'  => 'REGULAR',
                'kg'     => '1',
                'harga'  => '12000',
                'hari'   => '1',
                'status' => '1',
            ],
            [
                'nama'   => 'Kilat',
                'jenis'  => 'REGULAR',
                'kg'     => '1',
                'harga'  => '15000',
                'hari'   => '4 jam',
                'status' => '1',
            ],
            // Layanan Paket (bisa pakai kuota)
            [
                'nama'   => 'Paket',
                'jenis'  => 'PAKET',
                'kg'     => '1',
                'harga'  => '0',
                'hari'   => '3',
                'status' => '1',
            ],
            // Layanan Bayi
            [
                'nama'   => 'Bayi Reguler',
                'jenis'  => 'LAUNDRY BAYI',
                'kg'     => '1',
                'harga'  => '10000',
                'hari'   => '3',
                'status' => '1',
            ],
            [
                'nama'   => 'Bayi Express',
                'jenis'  => 'LAUNDRY BAYI',
                'kg'     => '1',
                'harga'  => '15000',
                'hari'   => '1',
                'status' => '1',
            ],
            // Layanan Syariah
            [
                'nama'   => 'Syariah Reguler',
                'jenis'  => 'LAUNDRY SYARIAH',
                'kg'     => '1',
                'harga'  => '9000',
                'hari'   => '3',
                'status' => '1',
            ],
            [
                'nama'   => 'Syariah Express',
                'jenis'  => 'LAUNDRY SYARIAH',
                'kg'     => '1',
                'harga'  => '14000',
                'hari'   => '1',
                'status' => '1',
            ],
        ];

        foreach ($layanan as $data) {
            Harga::firstOrCreate(
                ['nama' => $data['nama'], 'jenis' => $data['jenis']],
                $data
            );
        }
    }
}
