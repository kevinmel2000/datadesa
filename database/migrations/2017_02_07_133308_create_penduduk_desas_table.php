<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendudukDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk_desas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nik');
          $table->string('nama');
          $table->string('tempat_lahir');
          $table->date('tanggal_lahir');
          $table->enum('kewarganegaraan', ['WNI', 'WNA', 'DWI KEWARGANEGARAAN']);
          $table->string('foto');
          $table->integer('jenis_kelamin_id')->unsigned()->nullable();
          $table->integer('golongan_darah_id')->unsigned()->nullable();
          $table->integer('agama_id')->unsigned()->nullable();
          $table->integer('status_kawin_id')->unsigned()->nullable();
          $table->integer('status_tinggal_id')->unsigned()->nullable();
          $table->integer('pendidikan_id')->unsigned()->nullable();
          $table->integer('pekerjaan_id')->unsigned()->nullable();
          $table->integer('cacat_id')->unsigned()->nullable();
          $table->integer('status_kependudukan_id')->unsigned()->nullable();
          $table->timestamps();

          $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamins')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('golongan_darah_id')->references('id')->on('golongan_darahs')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('agama_id')->references('id')->on('agamas')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('status_kawin_id')->references('id')->on('status_kawins')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('status_tinggal_id')->references('id')->on('status_tinggals')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('cacat_id')->references('id')->on('cacats')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('status_kependudukan_id')->references('id')->on('status_kependudukans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk_desas');
    }
}
