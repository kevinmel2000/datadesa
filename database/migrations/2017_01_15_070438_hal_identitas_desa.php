<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HalIdentitasDesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_identitas_desas', function (Blueprint $table) {
            $table->increments('id');
            // provinsi
            $table->string('nama_provinsi', 50)->nullable();
            $table->string('kode_provinsi', 3)->nullable();
            // kabupaten
            $table->string('nama_kabupaten', 50)->nullable();
            $table->string('kode_kabupaten', 3)->nullable();
            // kecamatan
            $table->string('nama_kecamatan', 50)->nullable();
            $table->string('kode_kecamatan', 3)->nullable();
            // desa
            $table->string('nama_desa', 50)-nullable();
            $table->string('kode_desa', 5)->nullable();
            // kodepos
            $table->string('kode_pos', 6)->nullable();
            // alamat kantor desa
            $table->string('alamat_kantor_desa')->nullable();
            // no tlpn
            $table->string('no_telepon')->nullable();
            // logo kabupaten
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
        Schema::dropIfExists('pengaturan_identitas_desas');
    }
}
