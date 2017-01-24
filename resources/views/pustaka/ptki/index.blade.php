@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Pustaka</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <!--tab panel-->
                  <ul class="nav nav-tabs" role="tablist">
                    <li>
                      <a href="agama">
                        Agama
                      </a>
                    </li>
                    <li>
                      <a href="hubungan-keluarga">
                        Hubungan
                      </a>
                    </li>
                    <li>
                      <a href="pekerjaan">
                        Pekerjaan
                      </a>
                    </li>
                    <li>
                      <a href="pendidikan">
                        Pendidikan
                      </a>
                    </li>
                    <li class="active">
                      <a href="penyalur-tki">
                        Penyalur TKI
                      </a>
                    </li>
                    <li>
                      <a href="status-kawin">
                        Status Kawin
                      </a>
                    </li>
                    <li>
                      <a href="status-tinggal">
                        Status Tinggal
                      </a>
                    </li>
                    <li>
                      <a href="jabatan">
                        Jabatan
                      </a>
                    </li>
                    <li>
                      <a href="surat">
                        Surat
                      </a>
                    </li>
                    <li>
                      <a href="standar-kemiskinan">
                        Standar Kemiskinan
                      </a>
                    </li>
                  </ul>
                  <!--tab panel-->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active"><br/>
                      <p>
                        {!! link_to('pustaka/penyalur-tki/create','Tambah Penyalur TKI',['class'=>'btn btn-primary btn-sm']) !!}
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Nama PPTKIS</strong></th>
                              <th><strong>Penanggung Jawab</strong></th>
                              <th><strong>Nomor Izin PPTKIS</strong></th>
                              <th><strong>Tanggal Izin</strong></th>
                              <th><strong>Nomor Telepon</strong></th>
                              <th width="15%"><strong>Aksi</strong></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($penyalurtki as $ptki)
                              <tr>
                                <td>{{ $ptki->id }}</td>
                                <td>{{ $ptki->nama_pptkis }}</td>
                                <td>{{ $ptki->penanggung_jawab }}</td>
                                <td>{{ $ptki->nomor_pptkis }}</td>
                                <td>{{ $ptki->tanggal_izin }}</td>
                                <td>{{ $ptki->nomor_telepon }}</td>
                                <td>
                                  {!! Form::open(array('method'=>'delete','url'=>'pustaka/penyalur-tki/'.$ptki->id)) !!}
                                  {!! Form::hidden('_delete','DELETE') !!}
                                  {!! link_to('pustaka/penyalur-tki/'.$ptki->id.'/edit','Ubah',['class'=>'btn btn-warning btn-xs']) !!}
                                  {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-xs']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!! $penyalurtki->render() !!}
                      </p>
                    </div>
                  </div>
                  <!--tab panel-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
