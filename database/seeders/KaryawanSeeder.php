<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $karyawans = [
            ['name' => 'Ahmad Fauzi',      'email' => 'ahmad@laundry.com',  'alamat' => 'Jl. Kenanga No. 3, Senggoro',  'no_telp' => '081111111111'],
            ['name' => 'Rina Wulandari',   'email' => 'rina@laundry.com',   'alamat' => 'Jl. Mawar No. 7, Bengkalis',   'no_telp' => '082222222222'],
            ['name' => 'Doni Prasetyo',    'email' => 'doni@laundry.com',   'alamat' => 'Jl. Melati No. 12, Senggoro',  'no_telp' => '083333333333'],
            ['name' => 'Novi Andriani',    'email' => 'novi@laundry.com',   'alamat' => 'Jl. Anggrek No. 4, Bengkalis', 'no_telp' => '084444444444'],
            ['name' => 'Reza Firmansyah', 'email' => 'reza@laundry.com',   'alamat' => 'Jl. Dahlia No. 9, Senggoro',  'no_telp' => '085555555555'],
        ];

        foreach ($karyawans as $data) {
            Karyawan::firstOrCreate(['email' => $data['email']], $data);
        }
    }
}
