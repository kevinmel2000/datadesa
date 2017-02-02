<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerangkatDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat_desas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perangkat');
            $table->integer('jabatan_id')->unsigned();
            $table->string('niap')->nullable();
            $table->string('nip')->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('no_tgl_keputusan_pengangkatan')->nullable();
            $table->string('no_tgl_keputusan_pemberhentian')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perangkat_desas');
    }
}
