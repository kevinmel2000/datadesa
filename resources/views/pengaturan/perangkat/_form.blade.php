{!! Form::label('nama_perangkat', 'Nama Perangkat Desa', ['class'=>'control-label']) !!}
{!! Form::text('nama_perangkat',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Perangkat','autofocus']) !!}
<br/>

{!! Form::label('jabatan', 'Jabatan', ['class'=>'control-label']) !!}
{!! Form::select('jabatan_id', [''=>'']+App\Jabatan::pluck('jabatan','id')->all(), null, ['class'=>'form-control js-selectize', 'placeholder'=>'Pilih Jabatan']) !!}
<br/>

{!! Form::label('niap', 'NIAP', ['class'=>'control-label']) !!}
{!! Form::text('niap',null,['class'=>'form-control','placeholder'=>'Ketikkan NIAP']) !!}
<br/>

{!! Form::label('niap', 'NIP', ['class'=>'control-label']) !!}
{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>'Ketikkan NIP']) !!}
<br/>

{!! Form::label('pangkat_golongan', 'Pangkat Golongan', ['class'=>'control-label']) !!}
{!! Form::text('pangkat_golongan',null,['class'=>'form-control','placeholder'=>'Ketikkan Pangkat Golongan']) !!}
<br/>

{!! Form::label('no_tgl_keputusan_pengangkatan', 'No Tgl Keputusan Pengangkatan', ['class'=>'control-label']) !!}
{!! Form::text('no_tgl_keputusan_pengangkatan',null,['class'=>'form-control','placeholder'=>'Ketikkan No Tgl Keputusan Pengangkatan']) !!}
<br/>

{!! Form::label('no_tgl_keputusan_pemberhentian', 'No Tgl Keputusan Pemberhentian', ['class'=>'control-label']) !!}
{!! Form::text('no_tgl_keputusan_pemberhentian',null,['class'=>'form-control','placeholder'=>'Ketikkan No Tgl Keputusan Pemberhentian']) !!}
<br/>

{!! Form::label('keterangan', 'Keterangan', ['class'=>'control-label']) !!}
{!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>'Ketikkan Keterangan']) !!}
