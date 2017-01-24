<label class="form-label"><strong>Nama PPTKIS</strong></label>
{!! Form::text('nama_pptkis',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama PPTKIS','autofocus']) !!}<br/>
<label class="form-label"><strong>Nama Penanggung Jawab</strong></label>
{!! Form::text('penanggung_jawab',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Penanggung Jawab']) !!}<br/>
<label class="form-label"><strong>Nomor Izin PPTKIS</strong></label>
{!! Form::text('nomor_pptkis',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor Izin PPTKIS']) !!}<br/>
<label class="form-label"><strong>Tanggal Izin</strong></label>
{!! Form::text('tanggal_izin',null,['class'=>'form-control','placeholder'=>'Ketikkan Tanggal Izin']) !!}<br/>
<label class="form-label"><strong>Nomor Telepon</strong></label>
{!! Form::text('nomor_telepon',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor Telepon']) !!}<br/>
<label class="form-label"><strong>Nomor FAX</strong></label>
{!! Form::text('nomor_fax',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor FAX']) !!}<br/>
<label class="form-label"><strong>Alamat Kantor</strong></label>
{!! Form::text('alamat_kantor',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Kantor']) !!}<br/>
<label class="form-label"><strong>Alamat Penampungan</strong></label>
{!! Form::text('alamat_penampungan',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Penampungan']) !!}<br/>
<label class="form-label"><strong>Email</strong></label>
{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Email']) !!}<br/>
<label class="form-label"><strong>Website</strong></label>
{!! Form::text('website',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Website']) !!}<br/>
<label class="form-label"><strong>Provinsi</strong></label>
{!! Form::select('kode_provinsi',
  [
   '11' => 'Aceh',
   '12' => 'Sumatera Utara',
   '13' => 'Sumatera Barat',
   '14' => 'Riau',
   '15' => 'Jambi',
   '16' => 'Sumatera Selatan',
   '17' => 'Bengkulu',
   '18' => 'Lampung',
   '19' => 'Kep. Bangka Belitung',
   '21' => 'Kep. Riau',
   '31' => 'DKI Jakarta',
   '32' => 'Jawa Barat',
   '33' => 'Jawa Tengah',
   '36' => 'Banten',
   '35' => 'Jawa Timur',
   '34' => 'Yogyakarta',
   '51' => 'Bali',
   '52' => 'Nusa Tenggara Barat',
   '53' => 'Nusa Tenggara Timur',
   '61' => 'Kalimantan Barat',
   '62' => 'Kalimantan Tengah',
   '63' => 'Kalimantan Selatan',
   '64' => 'Kalimantan Timur',
   '65' => 'Kalimantan Utara',
   '71' => 'Sulawesi Utara',
   '72' => 'Sulawesi Tengah',
   '73' => 'Sulawesi Selatan',
   '74' => 'Sulawesi Tenggara',
   '75' => 'Gorontalo',
   '76' => 'Sulawesi Barat',
   '81' => 'Maluku',
   '82' => 'Maluku Utara',
   '91' => 'Papua',
   '92' => 'Papua Barat',
 ], null,
 [
   'class'=>'form-control',
   'placeholder'=>'Pilih Provinsi'
 ]
) !!}
