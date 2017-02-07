<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
  protected $table = 'jenis_kelamins';

  protected $fillable = ['jenis_kelamin'];

  public function penduduks()
  {
    return $this->hasOne('App\Penduduk');
  }
}
