<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Membuat 3 akun customer sample untuk testing.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name'    => 'Budi Santoso',
                'email'   => 'budi@customer.com',
                'no_telp' => '081234567890',
                'alamat'  => 'Jl. Merdeka No. 1, Senggoro',
            ],
            [
                'name'    => 'Siti Rahayu',
                'email'   => 'siti@customer.com',
                'no_telp' => '082345678901',
                'alamat'  => 'Jl. Pahlawan No. 5, Bengkalis',
            ],
            [
                'name'    => 'Andi Wijaya',
                'email'   => 'andi@customer.com',
                'no_telp' => '083456789012',
                'alamat'  => 'Jl. Sudirman No. 10, Pekanbaru',
            ],
        ];

        foreach ($customers as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'name'     => $data['name'],
                    'status'   => 'Active',
                    'auth'     => 'Customer',
                    'no_telp'  => $data['no_telp'],
                    'alamat'   => $data['alamat'],
                    'password' => bcrypt('123456'),
                ]
            );

            // Role sudah dibuat oleh RoleSeeder
            $user->assignRole('Customer');
        }
    }
}
