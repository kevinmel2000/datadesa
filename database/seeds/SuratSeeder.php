<?php

use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('surats')->delete();
      // buat data berupa array untuk diinput ke database
      $surats = array(
        array('id'=>1, 'kode_surat'=>'470', 'nama_surat'=>'KEPENDUDUKAN', 'kode_parent'=>''),
        array('id'=>2, 'kode_surat'=>'471', 'nama_surat'=>'Kewarganegaraan Indonesia', 'kode_parent'=>'470'),
        array('id'=>3, 'kode_surat'=>'471.1', 'nama_surat'=>'WNI Asli', 'kode_parent'=>'471'),
        array('id'=>4, 'kode_surat'=>'471.2', 'nama_surat'=>'WNI Keturunan Asing', 'kode_parent'=>'471'),
        array('id'=>5, 'kode_surat'=>'471.21', 'nama_surat'=>'Permohonan Kewarganegaraan', 'kode_parent'=>'471.2'),
        array('id'=>6, 'kode_surat'=>'471.22', 'nama_surat'=>'Permohonan Ganti Nama', 'kode_parent'=>'471.2'),
        array('id'=>7, 'kode_surat'=>'471.3', 'nama_surat'=>'Asimilasi', 'kode_parent'=>'471'),
        array('id'=>8, 'kode_surat'=>'472', 'nama_surat'=>'Kewarganegaraan Asing', 'kode_parent'=>'470'),
        array('id'=>9, 'kode_surat'=>'473', 'nama_surat'=>'Tidak Berkewarganegaraan (state less)', 'kode_parent'=>'470'),
        array('id'=>10, 'kode_surat'=>'474', 'nama_surat'=>'Pendaftaran Penduduk', 'kode_parent'=>'470'),
      );
      // masukkan data ke database
      DB::table('surats')->insert($surats);
    }
}
