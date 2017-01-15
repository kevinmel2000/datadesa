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
