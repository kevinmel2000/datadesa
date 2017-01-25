<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
  protected $fillable = ['kode_surat','nama_surat','kode_parent'];
}
