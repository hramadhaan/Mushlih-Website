<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/konsultasi','KonsultasiController@index')->name('konsultasi');

Route::resource('account', 'AccountController');

// Route::group(['prefix'=>'/artikel'], function(){
//     Route::get('','ArtikelController@index')->name('artikel');
//     Route::get('/create','ArtikelController@create')->name('buat_artikel');
//     Route::post('/create/store','ArtikelController@store')->name('post_artikel');
//     Route::get('/create/lihat/{id}','ArtikelController@edit')->name('edit_artikel');
// });

Route::resource('artikel','ArtikelController');

Route::resource('event', 'EventController');
