<?php

namespace App\Http\Controllers\Pustaka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendidikan;

class PendidikanController extends Controller
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
    $pendidikan = Pendidikan::paginate(10);
    return view('pustaka.pendidikan.index', compact('pendidikan'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pustaka.pendidikan.create');
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
    Pendidikan::create($data);
    return redirect('pustaka/pendidikan');
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
    $pendidikan = Pendidikan::find($id);
    return view('pustaka.pendidikan.edit', compact('pendidikan'));
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
    $pendidikan = Pendidikan::find($id);
    $pendidikan->update($data);
    return redirect('pustaka/pendidikan');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $pendidikan = Pendidikan::find($id);
    $pendidikan->delete();
    return redirect('pustaka/pendidikan');
  }
}
