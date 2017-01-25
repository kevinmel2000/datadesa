<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
// pengaturan umum
Route::get('pengaturan/umum', [
  'as'=>'pengaturan.edit',
  'uses'=>'Pengaturan\UmumController@edit'
]);
Route::put('pengaturan/umum', [
  'as'=>'pengaturan.update',
  'uses'=>'Pengaturan\UmumController@update'
]);
// pustaka
Route::resource('pustaka/agama','Pustaka\AgamaController');
Route::resource('pustaka/hubungan-keluarga','Pustaka\HubunganKeluargaController');
Route::resource('pustaka/pekerjaan','Pustaka\PekerjaanController');
Route::resource('pustaka/pendidikan','Pustaka\PendidikanController');
Route::resource('pustaka/penyalur-tki','Pustaka\PenyalurTkiController');
Route::resource('pustaka/status-kawin','Pustaka\StatusKawinController');
Route::resource('pustaka/status-tinggal','Pustaka\StatusTinggalController');
