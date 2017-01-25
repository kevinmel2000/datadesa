<label class="form-label"><strong>Kode Surat</strong></label>
{!! Form::text('kode_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Surat','autofocus']) !!}<br/>
<label class="form-label"><strong>Nama Surat</strong></label>
{!! Form::text('nama_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Surat']) !!}<br/>
<label class="form-label"><strong>Parent</strong></label>
{!! Form::select('kode_parent',
  [
   '470' => '470 - KEPENDUDUKAN',
   '471' => '471 - Kewarganegaraan Indonesia',
   '471.1' => '471.1 - WNI Asli',
   '471.2' => '471.2 - WNI Keturunan Asing',
   '471.21' => '471.21 - Permohonan Kewarganegaraan',
   '471.22' => '471.22 - Permohonan Ganti Nama',
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
 ], null,
 [
   'class'=>'form-control',
   'placeholder'=>'Pilih Kode Parent'
 ]
) !!}
