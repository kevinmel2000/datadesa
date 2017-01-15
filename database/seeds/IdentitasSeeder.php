<?php

use Illuminate\Database\Seeder;
use App\Identitas;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Membuat sample identitas
      $idt = new Identitas();
      $idt->nama_provinsi = 'Jawa Tengah';
      $idt->kode_provinsi = '33';
      $idt->nama_kabupaten = 'Purbalingga';
      $idt->kode_kabupaten = '03';
      $idt->nama_kecamatan = 'Padamara';
      $idt->kode_kecamatan = '15';
      $idt->nama_desa = 'Sokawera';
      $idt->kode_desa = '2002';
      $idt->kode_pos = '53372';
      $idt->alamat_desa = 'Jalan Raya Sokawera RT01 RW03';
      $idt->no_telepon = '08112688080';
      $idt->logo_kabupaten = 'logodisini.jpg';
      $idt->save();
    }
}
