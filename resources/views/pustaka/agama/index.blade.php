@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Pustaka</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">

                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#agama" aria-controls="form" role="tab" data-toggle="tab">
                        <i class="fa fa-address-card"></i> Agama
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-object-group"></i> Status Perkawinan
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Status Tempat Tinggal
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Hubungan Keluarga
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Pendidikan
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Pekerjaan
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Jabatan Perangkat
                      </a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="identitasdesa"><br/>
                      <p>

                        {!! link_to('agama/create','Tambah Agama',['class'=>'btn btn-primary']) !!}
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th><strong>ID</strong></th>
                              <th><strong>Agama</strong></th>
                              <th width="15%"><strong>Aksi</strong></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($agama as $a)
                              <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->agama }}</td>
                                <td>
                                  {!! Form::open(array('method'=>'delete','url'=>'agama/'.$a->id)) !!}
                                  {!! Form::hidden('_delete','DELETE') !!}
                                  {!! link_to('agama/'.$a->id.'/edit','Ubah',['class'=>'btn btn-warning btn-xs']) !!}
                                  {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-xs']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!! $agama->render() !!}

                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
