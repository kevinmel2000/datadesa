<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyalurtki extends Model
{
  protected $fillable = ['nama_pptkis','penanggung_jawab','nomor_pptkis','tanggal_izin','nomor_telepon','nomor_fax','alamat_kantor','alamat_penampungan','email','website','kode_provinsi'];
}
