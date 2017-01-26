<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
  protected $fillable = ['nama_perangkat','jabatan','niap','nip','pangkat_golongan','no_tgl_keputusan_pengangkatan','no_tgl_keputusan_pemberhentian','keterangan'];

  public function jabatans()
  {
    return $this->hasMany('App\Jabatan');
  }
}
