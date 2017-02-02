<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
  protected $table = 'perangkat_desas';

  protected $fillable = ['nama_perangkat','jabatan_id','niap','nip','pangkat_golongan','no_tgl_keputusan_pengangkatan','no_tgl_keputusan_pemberhentian','keterangan'];

  public function jabatans()
  {
    return $this->belongsTo('App\Jabatan','jabatan_id');
  }
}
