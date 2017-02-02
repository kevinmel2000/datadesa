<?php

use Illuminate\Database\Seeder;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('perangkat_desas')->delete();
      // buat data berupa array untuk diinput ke database
      $perangkat_desas = array(
        array('id'=>1, 'nama_perangkat'=>'Pri Anton Subardio', 'jabatan_id'=>'1', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>2, 'nama_perangkat'=>'Chusnul Chotimah', 'jabatan_id'=>'2', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>3, 'nama_perangkat'=>'Pradna Paramita', 'jabatan_id'=>'3', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>4, 'nama_perangkat'=>'Soepriyanto', 'jabatan_id'=>'4', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>5, 'nama_perangkat'=>'Aryakulo', 'jabatan_id'=>'5', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>6, 'nama_perangkat'=>'Akbar Bahaulloh', 'jabatan_id'=>'6', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>7, 'nama_perangkat'=>'Zihnie Hakim', 'jabatan_id'=>'7', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>8, 'nama_perangkat'=>'Heru Priyatno', 'jabatan_id'=>'8', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>9, 'nama_perangkat'=>'Suparna', 'jabatan_id'=>'9', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>10, 'nama_perangkat'=>'Doyo', 'jabatan_id'=>'10', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),
      );
      // masukkan data ke database
      DB::table('perangkat_desas')->insert($perangkat_desas);
    }
}
