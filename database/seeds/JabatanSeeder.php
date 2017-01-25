<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('jabatans')->delete();
      // buat data berupa array untuk diinput ke database
      $jabatans = array(
        array('id'=>1, 'jabatan'=>'Kepala Desa'),
        array('id'=>2, 'jabatan'=>'Sekretaris Desa'),
        array('id'=>3, 'jabatan'=>'Kepala Dusun'),
        array('id'=>4, 'jabatan'=>'Kasi Pemerintahan'),
        array('id'=>5, 'jabatan'=>'Kasi Pembangunan'),
        array('id'=>6, 'jabatan'=>'Kasi Kesdaya'),
        array('id'=>7, 'jabatan'=>'Kaur Umum'),
        array('id'=>8, 'jabatan'=>'Kaur Keuangan'),
        array('id'=>9, 'jabatan'=>'Staff'),
        array('id'=>10, 'jabatan'=>'Bendahara'),
      );
      // masukkan data ke database
      DB::table('jabatans')->insert($jabatans);
    }
}
