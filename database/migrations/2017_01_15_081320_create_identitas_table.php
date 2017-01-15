<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_provinsi', 50)->nullable();
            $table->string('kode_provinsi', 3)->nullable();
            $table->string('nama_kabupaten', 50)->nullable();
            $table->string('kode_kabupaten', 3)->nullable();
            $table->string('nama_kecamatan', 50)->nullable();
            $table->string('kode_kecamatan', 3)->nullable();
            $table->string('nama_desa', 55)->nullable();
            $table->string('kode_desa', 5)->nullable();
            $table->string('kode_pos', 6)->nullable();
            $table->string('alamat_desa')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('logo_kabupaten')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identitas');
    }
}
