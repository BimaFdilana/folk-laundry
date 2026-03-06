<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@laundry.com'],
            [
                'name'     => 'Administrator',
                'status'   => 'Active',
                'auth'     => 'Admin',
                'password' => bcrypt('123456'),
            ]
        );

        // Role sudah dibuat oleh RoleSeeder
        $user->assignRole('Admin');
    }
}

