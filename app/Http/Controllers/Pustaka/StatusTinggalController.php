<?php

namespace App\Http\Controllers\Pustaka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StatusTinggal;

class StatusTinggalController extends Controller
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
    $status_tinggal = StatusTinggal::paginate(10);
    return view('pustaka.st.index', compact('status_tinggal'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pustaka.st.create');
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
    StatusTinggal::create($data);
    return redirect('pustaka/status-tinggal');
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
    $status_tinggal = StatusTinggal::find($id);
    return view('pustaka.st.edit', compact('status_tinggal'));
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
    $status_tinggal = StatusTinggal::find($id);
    $status_tinggal->update($data);
    return redirect('pustaka/status-tinggal');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $status_tinggal = StatusTinggal::find($id);
    $status_tinggal->delete();
    return redirect('pustaka/status-tinggal');
  }
}
