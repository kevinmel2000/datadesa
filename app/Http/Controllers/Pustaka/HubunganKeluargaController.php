<?php

namespace App\Http\Controllers\Pustaka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HubunganKeluarga;

class HubunganKeluargaController extends Controller
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
      $hubungan_keluarga = HubunganKeluarga::paginate(10);
      return view('pustaka.hk.index', compact('hubungan_keluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pustaka.hk.create');
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
      HubunganKeluarga::create($data);
      return redirect('pustaka/hubungan-keluarga');
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
      $hubungan_keluarga = HubunganKeluarga::find($id);
      return view('pustaka.hk.edit', compact('hubungan_keluarga'));
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
      $hubungan_keluarga = HubunganKeluarga::find($id);
      $hubungan_keluarga->update($data);
      return redirect('pustaka/hubungan-keluarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hubungan_keluarga = HubunganKeluarga::find($id);
      $hubungan_keluarga->delete();
      return redirect('pustaka/hubungan-keluarga');
    }
}
