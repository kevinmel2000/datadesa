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
                    <li class="active">
                      <a href="umum">
                        Identitas Desa
                      </a>
                    </li>
                    <li>
                      <a href="wilayah-administratif">
                        Wilayah Administratif
                      </a>
                    </li>
                    <li>
                      <a href="perangkat-desa">
                        Perangkat Desa
                      </a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="identitasdesa">
                      <p>
                        {!! Form::model($identitas, ['url'=>route('pengaturan.update', $identitas->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                        @include('pengaturan.umum._formidentitas')
                        {!! Form::close() !!}
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
