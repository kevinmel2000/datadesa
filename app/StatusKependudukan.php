<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusKependudukan extends Model
{
  protected $table = 'status_kependudukans';

  protected $fillable = ['status_kependudukan'];

  public function penduduks()
  {
    return $this->hasOne('App\Penduduk');
  }
}
