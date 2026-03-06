<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggalToPengeluaransAndPemasukansTable extends Migration
{
    public function up(): void
    {
        Schema::table('pengeluarans', function (Blueprint $table) {
            $table->date('tanggal')->after('total')->nullable();
        });

        Schema::table('pemasukans', function (Blueprint $table) {
            $table->date('tanggal')->after('total')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pengeluarans', function (Blueprint $table) {
            $table->dropColumn('tanggal');
        });

        Schema::table('pemasukans', function (Blueprint $table) {
            $table->dropColumn('tanggal');
        });
    }
}
