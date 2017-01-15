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
            $table->string('nama_provinsi', 50);
            $table->string('kode_provinsi', 3);
            $table->string('nama_kabupaten', 50);
            $table->string('kode_kabupaten', 3);
            $table->string('nama_kecamatan', 50);
            $table->string('kode_kecamatan', 3);
            $table->string('nama_desa', 55);
            $table->string('kode_desa', 5);
            $table->string('kode_pos', 6);
            $table->string('alamat_desa');
            $table->string('no_telepon');
            $table->string('logo_kabupaten');
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
