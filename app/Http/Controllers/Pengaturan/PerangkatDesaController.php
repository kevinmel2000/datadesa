<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PerangkatDesa;

class PerangkatDesaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $perangkat_desa = PerangkatDesa::paginate(10);
    return view('pengaturan.perangkat.index', compact('perangkat_desa'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pengaturan.perangkat.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data=$request->all();
    PerangkatDesa::create($data);
    return redirect('pengaturan/perangkat-desa');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $perangkat_desa = PerangkatDesa::find($id);
    return view('pengaturan.perangkat.edit', compact('perangkat_desa'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $data=$request->all();
    $perangkat_desa = PerangkatDesa::find($id);
    $perangkat_desa->update($data);
    return redirect('pengaturan/perangkat-desa');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $perangkat_desa = PerangkatDesa::find($id);
    $perangkat_desa->delete();
    return redirect('pengaturan/perangkat-desa');
  }
}
