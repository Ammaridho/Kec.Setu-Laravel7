<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend ==================================================================================================

//kosong hanya layouts
Route::get('/','navigasiController@index');

//home
Route::get('/layouts','navigasiController@layouts');

//deskripsi
Route::get('{id_deskripsi}/deskripsi','navigasiController@deskripsi');

//isibacaan
Route::get('{id}/isibacaan','navigasiController@isibacaan');

//profil kelurahan
Route::get('{nama}/kelurahan','navigasiController@profilkelurahan');

//perda
Route::get('/perda','navigasiController@perda');

//perwal
Route::get('/perwal','navigasiController@perwal');

//kepwal
Route::get('/kepwal','navigasiController@kepwal');

//berita kecamatan
Route::get('/beritakecamatan','navigasiController@beritakecamatan');


//input pengaduan
Route::get('/formpengaduan','navigasiController@formpengaduan'); //keform
Route::post('/','navigasiController@storeformpengaduan');  //proses input








//backend ===================================================================================================

//index
Route::get('/backendindex','backendController@index');

//inputbacaan
Route::get('/backendinputbacaan','backendController@inputbacaan');
Route::post('/backendindex','backendController@storebackendinputbacaan');

//baca bacaan
Route::get('/bacaan/{judul}','backendController@bacabacaan');


//hapus bacaan
Route::delete('/backendindex/{id}','backendController@destroybacaan');

//hapus pengaduan
Route::delete('/backendindex/{id}','backendController@destroypengaduan');