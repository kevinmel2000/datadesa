<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cacat extends Model
{
  protected $table = 'cacats';

  protected $fillable = ['cacat'];

  public function penduduks()
  {
    return $this->hasOne('App\Penduduk');
  }
}
