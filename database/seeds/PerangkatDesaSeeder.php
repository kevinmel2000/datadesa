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
        array('id'=>1, 'nama_perangkat'=>'Pri Anton Subardio', 'jabatan'=>'Kepala Desa', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>2, 'nama_perangkat'=>'Chusnul Chotimah', 'jabatan'=>'Sekretaris Desa', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>3, 'nama_perangkat'=>'Pradna Paramita', 'jabatan'=>'Kepala Dusun', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>4, 'nama_perangkat'=>'Soepriyanto', 'jabatan'=>'Kasi Pemerintahan', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>5, 'nama_perangkat'=>'Aryakulo', 'jabatan'=>'Kasi Pembangunan', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>6, 'nama_perangkat'=>'Akbar Bahaulloh', 'jabatan'=>'Kasi Kesdaya', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>7, 'nama_perangkat'=>'Zihnie Hakim', 'jabatan'=>'Kaur Umum', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>8, 'nama_perangkat'=>'Heru Priyatno', 'jabatan'=>'Kaur Keuangan', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),

        array('id'=>9, 'nama_perangkat'=>'Suparna', 'jabatan'=>'Staff', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),
        
        array('id'=>10, 'nama_perangkat'=>'Doyo', 'jabatan'=>'Bendahara', 'niap'=>'', 'nip'=>'', 'pangkat_golongan'=>'', 'no_tgl_keputusan_pengangkatan'=>'', 'no_tgl_keputusan_pemberhentian'=>'', 'keterangan'=>''),
      );
      // masukkan data ke database
      DB::table('perangkat_desas')->insert($perangkat_desas);
    }
}
