<?php

use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('jenis_kelamins')->delete();
      // buat data berupa array untuk diinput ke database
      $jenis_kelamins = array(
        array('id'=>1, 'jenis_kelamin'=>'Laki-laki'),
        array('id'=>2, 'jenis_kelamin'=>'Perempuan'),
      );
      // masukkan data ke database
      DB::table('jenis_kelamins')->insert($jenis_kelamins);
    }
}
