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
                    <li>
                      <a href="penyalur-tki">
                        Penyalur TKI
                      </a>
                    </li>
                    <li class="active">
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
                        {!! link_to('pustaka/status-kawin/create','Tambah Status Kawin',['class'=>'btn btn-primary btn-sm']) !!}
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Status Kawin</strong></th>
                              <th width="15%"><strong>Aksi</strong></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($status_kawin as $sk)
                              <tr>
                                <td>{{ $sk->id }}</td>
                                <td>{{ $sk->status_kawin }}</td>
                                <td>
                                  {!! Form::open(array('method'=>'delete','url'=>'pustaka/status-kawin/'.$sk->id)) !!}
                                  {!! Form::hidden('_delete','DELETE') !!}
                                  {!! link_to('pustaka/status-kawin/'.$sk->id.'/edit','Ubah',['class'=>'btn btn-warning btn-xs']) !!}
                                  {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-xs']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!! $status_kawin->render() !!}
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
