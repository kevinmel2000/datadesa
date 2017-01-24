<?php

namespace App\Http\Controllers\Pustaka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StatusKawin;

class StatusKawinController extends Controller
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
    $status_kawin = StatusKawin::paginate(10);
    return view('pustaka.sk.index', compact('status_kawin'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pustaka.sk.create');
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
    StatusKawin::create($data);
    return redirect('pustaka/status-kawin');
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
    $status_kawin = StatusKawin::find($id);
    return view('pustaka.sk.edit', compact('status_kawin'));
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
    $status_kawin = StatusKawin::find($id);
    $status_kawin->update($data);
    return redirect('pustaka/status-kawin');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $status_kawin = StatusKawin::find($id);
    $status_kawin->delete();
    return redirect('pustaka/status-kawin');
  }
}
