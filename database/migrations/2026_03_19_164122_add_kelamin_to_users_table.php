<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKelaminToUsersTable extends Migration
{
    /**
     * Tambah kolom kelamin ke tabel users.
     * Kolom ini dibutuhkan oleh AdminController, CustomerController,
     * dan semua form tambah admin/customer namun belum ada di tabel.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('kelamin', ['Laki-laki', 'Perempuan'])
                  ->nullable()
                  ->after('no_telp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('kelamin');
        });
    }
}
