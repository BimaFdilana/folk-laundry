<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::firstOrCreate(
            ['email' => 'superadmin@laundry.com'],
            [
                'name'     => 'Super Administrator',
                'status'   => 'Active',
                'auth'     => 'SuperAdmin',
                'password' => bcrypt('123456'),
            ]
        );

        // Role sudah dibuat oleh RoleSeeder
        $user->assignRole('SuperAdmin');
    }
}

