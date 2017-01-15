<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UmumController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit()
  {
      return view('pengaturan.umum.identitas');
  }
}
