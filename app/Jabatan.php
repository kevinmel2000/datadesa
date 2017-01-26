<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
  protected $fillable = ['jabatan'];

  public function perangkat_desas()
  {
    return $this->belongsTo('App\PerangkatDesa');
  }
}
