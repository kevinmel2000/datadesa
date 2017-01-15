<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Identitas;

class UmumController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit()
  {
    $identitas = Identitas::find(1);
    return view('pengaturan.umum.identitas')->with(compact('identitas'));
  }

  public function update(Request $request)
  {
    $data=$request->all();
    $identitas = Identitas::find(1);
    $identitas->update($data);
    return view('pengaturan.umum.identitas')->with(compact('identitas'));
  }
}
