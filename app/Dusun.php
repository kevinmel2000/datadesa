<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
  protected $table = 'dusuns';

  protected $fillable = ['nama_dusun'];
}
