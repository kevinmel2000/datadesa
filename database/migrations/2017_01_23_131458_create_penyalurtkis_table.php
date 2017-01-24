<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyalurtkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyalurtkis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pptkis')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->string('nomor_pptkis')->nullable();
            $table->date('tanggal_izin')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('nomor_fax')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('alamat_penampungan')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('kode_provinsi')->nullable();
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
        Schema::dropIfExists('penyalurtkis');
    }
}
