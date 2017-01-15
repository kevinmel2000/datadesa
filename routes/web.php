<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
// pengaturan umum
Route::get('pengaturan/umum', 'Pengaturan\UmumController@index');
