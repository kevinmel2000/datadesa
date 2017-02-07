<?php

use Illuminate\Database\Seeder;

class CacatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('cacats')->delete();
      // buat data berupa array untuk diinput ke database
      $cacats = array(
        array('id'=>1, 'cacat'=>'Tidak Cacat'),
        array('id'=>2, 'cacat'=>'Cacat Fisik'),
        array('id'=>3, 'cacat'=>'Cacat Netra/Buta'),
        array('id'=>4, 'cacat'=>'Cacat Rungu/Wicara'),
        array('id'=>5, 'cacat'=>'Cacat Mental/Jiwa'),
        array('id'=>6, 'cacat'=>'Cacat Fisik dan Mental'),
        array('id'=>7, 'cacat'=>'Cacat Lainnya'),
      );
      // masukkan data ke database
      DB::table('cacats')->insert($cacats);
    }
}
