<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetFinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finance_targets')->insert([
            'tahun' => date('Y'),
            'target_tahun' => 100000000,
            'target_bulan' => 8000000,
            'target_hari' => 300000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
