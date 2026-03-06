<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Semua role dibuat di sini, terpusat.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['SuperAdmin', 'Admin', 'Customer', 'Karyawan'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }
}
