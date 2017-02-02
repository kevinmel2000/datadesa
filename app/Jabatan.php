<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
  protected $table = 'jabatans';

  protected $fillable = ['jabatan'];

  public function perangkat_desas()
  {
    return $this->hasOne('App\PerangkatDesa');
  }
}
