<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
  protected $fillable = ['nama_provinsi', 'kode_provinsi', 'nama_kabupaten', 'kode_kabupaten', 'nama_kecamatan', 'kode_kecamatan', 'nama_desa', 'kode_desa', 'kode_pos', 'alamat_desa', 'no_telepon', 'logo_kabupaten'];
}
