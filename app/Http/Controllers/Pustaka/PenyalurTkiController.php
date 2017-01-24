<?php

namespace App\Http\Controllers\Pustaka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Penyalurtki;

class PenyalurTkiController extends Controller
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
    $penyalurtki = Penyalurtki::paginate(10);
    return view('pustaka.ptki.index', compact('penyalurtki'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pustaka.ptki.create');
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
    Penyalurtki::create($data);
    return redirect('pustaka/penyalur-tki');
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
    $penyalurtki = Penyalurtki::find($id);
    return view('pustaka.ptki.edit', compact('penyalurtki'));
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
    $penyalurtki = Penyalurtki::find($id);
    $penyalurtki->update($data);
    return redirect('pustaka/penyalur-tki');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $penyalurtki = Penyalurtki::find($id);
    $penyalurtki->delete();
    return redirect('pustaka/penyalur-tki');
  }
}
