<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 1. Buat semua role dulu (HARUS pertama)
        $this->call(RoleSeeder::class);

        // 2. Buat akun user per role
        $this->call(SuperAdminSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(KaryawanSeeder::class);

        // 3. Data master laundry
        $this->call(HargaSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(KategoriSeeder::class);   // harus sebelum InventarisSeeder
        $this->call(InventarisSeeder::class);

        // 4. Setting aplikasi
        $this->call(SettingPageSeeder::class);
        $this->call(LaundrySettingSeeder::class);
        $this->call(TargetFinanceSeeder::class);

        // 5. Data transaksi dummy (bergantung pada Customer, Karyawan, Harga)
        $this->call(TransaksiSeeder::class);

        // IndoBankSeeder dinonaktifkan (tabel banks tidak ada di project ini)
        // $this->call(IndoBankSeeder::class);
    }
}

