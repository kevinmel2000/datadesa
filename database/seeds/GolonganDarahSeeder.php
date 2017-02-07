<?php

use Illuminate\Database\Seeder;

class GolonganDarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('golongan_darahs')->delete();
      // buat data berupa array untuk diinput ke database
      $golongan_darahs = array(
        array('id'=>1, 'golongan_darah'=>'A'),
        array('id'=>2, 'golongan_darah'=>'B'),
        array('id'=>3, 'golongan_darah'=>'AB'),
        array('id'=>4, 'golongan_darah'=>'O'),
        array('id'=>5, 'golongan_darah'=>'A+'),
        array('id'=>6, 'golongan_darah'=>'A-'),
        array('id'=>7, 'golongan_darah'=>'B+'),
        array('id'=>8, 'golongan_darah'=>'B-'),
        array('id'=>9, 'golongan_darah'=>'AB+'),
        array('id'=>10, 'golongan_darah'=>'AB-'),
        array('id'=>11, 'golongan_darah'=>'O+'),
        array('id'=>12, 'golongan_darah'=>'O-'),
        array('id'=>13, 'golongan_darah'=>'Tidak Tahu'),
      );
      // masukkan data ke database
      DB::table('golongan_darahs')->insert($golongan_darahs);
    }
}
