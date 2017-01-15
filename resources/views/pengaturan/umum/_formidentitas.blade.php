<div class="col-md-12 form-group{{ $errors->has('nama_provinsi','kode_provinsi') ? ' has-error' : '' }}">
  {!! Form::label('nama_provinsi', 'Nama Provinsi', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nama_provinsi', null, ['class'=>'form-control']) !!}
    {!! $errors->first('nama_provinsi', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('kode_provinsi', 'Kode Provinsi', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::number('kode_provinsi', null, ['class'=>'form-control']) !!}
    {!! $errors->first('kode_provinsi', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group{{ $errors->has('nama_kabupaten','kode_kabupaten') ? ' has-error' : '' }}">
  {!! Form::label('nama_kabupaten', 'Nama Kabupaten', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nama_kabupaten', null, ['class'=>'form-control']) !!}
    {!! $errors->first('nama_kabupaten', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('kode_kabupaten', 'Kode Kabupaten', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::number('kode_kabupaten', null, ['class'=>'form-control']) !!}
    {!! $errors->first('kode_kabupaten', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group{{ $errors->has('nama_kecamatan','kode_kecamatan') ? ' has-error' : '' }}">
  {!! Form::label('nama_kecamatan', 'Nama Kecamatan', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nama_kecamatan', null, ['class'=>'form-control']) !!}
    {!! $errors->first('nama_kecamatan', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('kode_kecamatan', 'Kode Kecamatan', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::number('kode_kecamatan', null, ['class'=>'form-control']) !!}
    {!! $errors->first('kode_kecamatan', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group{{ $errors->has('nama_desa','kode_desa') ? ' has-error' : '' }}">
  {!! Form::label('nama_desa', 'Nama Desa', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nama_desa', null, ['class'=>'form-control']) !!}
    {!! $errors->first('nama_desa', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('kode_desa', 'Kode Desa', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::number('kode_desa', null, ['class'=>'form-control']) !!}
    {!! $errors->first('kode_desa', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group{{ $errors->has('no_telepon','kode_pos') ? ' has-error' : '' }}">
  {!! Form::label('no_telepon', 'Nomor Telepon', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('no_telepon', null, ['class'=>'form-control']) !!}
    {!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('kode_pos', 'Kode Pos', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::number('kode_pos', null, ['class'=>'form-control']) !!}
    {!! $errors->first('kode_pos', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group{{ $errors->has('alamat_desa','logo_kabupaten') ? ' has-error' : '' }}">
  {!! Form::label('alamat_desa', 'Alamat Kantor Desa', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::textarea('alamat_desa', null, ['class'=>'form-control']) !!}
    {!! $errors->first('alamat_desa', '<p class="help-block">:message</p>') !!}
  </div>
  {!! Form::label('logo_kabupaten', 'Logo Kabupaten', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('logo_kabupaten', null, ['class'=>'form-control']) !!}
    {!! $errors->first('logo_kabupaten', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="col-md-12 form-group">
  <div class="col-md-4 col-md-offset-2">
    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
  </div>
</div>
