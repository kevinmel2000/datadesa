<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolonganDarah extends Model
{
  protected $table = 'golongan_darahs';

  protected $fillable = ['golongan_darah'];

  public function penduduks()
  {
    return $this->hasOne('App\Penduduk');
  }
}
