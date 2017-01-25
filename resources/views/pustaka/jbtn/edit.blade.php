@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ url('pustaka/jabatan') }}">Pustaka</a></li>
            <li class="active">Ubah Jabatan</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <div class="col-md-8">
                    {!! Form::model($jabatan, array('url'=>'pustaka/jabatan/'.$jabatan->id,'method'=>'patch')) !!}
                    {!! link_to('pustaka/jabatan','Kelola Jabatan',['class'=>'btn btn-primary btn-sm']) !!} {!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
                    <br><br>
                    @include('pustaka.jbtn._form')
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
