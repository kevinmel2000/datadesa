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
                    <li class="active">
                      <a href="hubungan-keluarga">
                        Hubungan
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Pekerjaan
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Pendidikan
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Penyalur TKI
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Status Kawin
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Status Tinggal
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Jabatan
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Surat
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Standar Kemiskinan
                      </a>
                    </li>
                  </ul>
                  <!--tab panel-->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active"><br/>
                      <p>
                        {!! link_to('pustaka/hubungan-keluarga/create','Tambah Hubungan Keluarga',['class'=>'btn btn-primary btn-sm']) !!}
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Hubungan Keluarga</strong></th>
                              <th width="15%"><strong>Aksi</strong></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($hubungan_keluarga as $h)
                              <tr>
                                <td>{{ $h->id }}</td>
                                <td>{{ $h->hubungan_keluarga }}</td>
                                <td>
                                  {!! Form::open(array('method'=>'delete','url'=>'pustaka/hubungan-keluarga/'.$h->id)) !!}
                                  {!! Form::hidden('_delete','DELETE') !!}
                                  {!! link_to('pustaka/hubungan-keluarga/'.$h->id.'/edit','Ubah',['class'=>'btn btn-warning btn-xs']) !!}
                                  {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-xs']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!! $hubungan_keluarga->render() !!}
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
