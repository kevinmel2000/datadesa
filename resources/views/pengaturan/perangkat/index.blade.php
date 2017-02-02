@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Pengaturan</li>
          </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Pengaturan umum</div>
                <div class="panel-body">

                  <ul class="nav nav-tabs" role="tablist">
                    <li>
                      <a href="umum">
                        Identitas Desa
                      </a>
                    </li>
                    <li>
                      <a href="wilayah-administratif">
                        Wilayah Administratif
                      </a>
                    </li>
                    <li class="active">
                      <a href="perangkat-desa">
                        Perangkat Desa
                      </a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active">
                      <p><br/>
                        {!! link_to('pengaturan/perangkat-desa/create','Tambah Perangkat Desa',['class'=>'btn btn-primary btn-sm']) !!}
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th><strong>No</strong></th>
                              <th><strong>Nama Perangkat Desa</strong></th>
                              <th><strong>Jabatan</strong></th>
                              <th><strong>NIAP</strong></th>
                              <th><strong>NIP</strong></th>
                              <th width="15%"><strong>Aksi</strong></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($perangkat_desa as $prd)
                              <tr>
                                <td>{{ $prd->id }}</td>
                                <td>{{ $prd->nama_perangkat }}</td>
                                <td>{{ $prd->jabatans->jabatan }}</td>
                                <td>{{ $prd->niap }}</td>
                                <td>{{ $prd->nip }}</td>
                                <td>
                                  {!! Form::open(array('method'=>'delete','url'=>'pengaturan/perangkat-desa/'.$prd->id)) !!}
                                  {!! Form::hidden('_delete','DELETE') !!}
                                  {!! link_to('pengaturan/perangkat-desa/'.$prd->id.'/edit','Ubah',['class'=>'btn btn-warning btn-xs']) !!}
                                  {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-xs']) !!}
                                  {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {!! $perangkat_desa->render() !!}
                      </p>
                    </div>
                  </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
