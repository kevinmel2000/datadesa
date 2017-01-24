<?php

use Illuminate\Database\Seeder;

class PenyalurTkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('penyalurtkis')->delete();
      // buat data berupa array untuk diinput ke database
      $penyalurtkis = array(
        array('id'=>1, 'nama_pptkis'=>'PT. AL - WIHDAH JAYA SENTOSA', 'penanggung_jawab'=>'FACHRI SYAHRUDDIN', 'nomor_pptkis'=>'KEP. 459/MEN/2006', 'tanggal_izin'=>'2006-11-30', 'nomor_telepon'=>'(061) 821 5444', 'nomor_fax'=>'Fax. 821 0324', 'alamat_kantor'=>'Jl. Setia Budi No. 74 C Medan', 'alamat_penampungan'=>'Jl. Setia Budi No. 74 C Medan', 'email'=>'', 'website'=>'', 'kode_provinsi'=>'12'),
        array('id'=>2, 'nama_pptkis'=>'PT. EKORISTI BERKARYA', 'penanggung_jawab'=>'AMPERA SIMBOLON, SE', 'nomor_pptkis'=>'KEP. 583/MEN/2006', 'tanggal_izin'=>'2006-11-30', 'nomor_telepon'=>'(061) 8476662, 8476663', 'nomor_fax'=>'Fax. 8474818', 'alamat_kantor'=>'Jl. Kapten Muslim No. 69A - Komp. Ruko Griya Riatur Indah Helvetia - Medan', 'alamat_penampungan'=>'Jl. Kapten Muslim No. 69A - Komp. Ruko Griya Riatur Indah Helvetia - Medan', 'email'=>'', 'website'=>'', 'kode_provinsi'=>'12'),
      );
      // masukkan data ke database
      DB::table('penyalurtkis')->insert($penyalurtkis);
    }
}
