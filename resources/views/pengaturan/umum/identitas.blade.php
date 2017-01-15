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
                    <li role="presentation" class="active">
                      <a href="#form" aria-controls="form" role="tab" data-toggle="tab">
                        <i class="fa fa-address-card"></i> Identitas Desa
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-object-group"></i> Wilayah Administratif
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
                        <i class="fa fa-user-secret"></i> Perangkat Desa
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="form">
                      {!! Form::model($member, ['url'=>route('members.update', $member->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                      @include('pengaturan.umum._formidentitas')
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
