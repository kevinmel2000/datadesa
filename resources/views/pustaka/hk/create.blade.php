@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ url('pustaka/hubungan-keluarga') }}">Pustaka</a></li>
            <li class="active">Tambah Hubungan Keluarga</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <div class="col-md-8">
                    {!! Form::open(array('url'=>'pustaka/hubungan-keluarga')) !!}
                    {!! link_to('pustaka/hubungan-keluarga','Kelola Hubungan Keluarga',['class'=>'btn btn-primary btn-sm']) !!} {!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
                    <br><br>
                    @include('pustaka.hk._form')
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
