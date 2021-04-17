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

//index
Route::get('/','navigasiController@index');

//home
Route::get('/layouts','navigasiController@layouts');

//searcing
Route::get('/search','navigasiController@hasilsearch');

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

//tag
Route::get('tags/{perihal}','navigasiController@tags');

//lihat gambargallery
Route::get('/gambargallery','navigasiController@lihatgambargallery');

//lihat videogallery
Route::get('/videogallery','navigasiController@lihatvideogallery');

//input pengaduan
Route::get('/formpengaduan','navigasiController@formpengaduan'); //keform
Route::post('/','navigasiController@storeformpengaduan');  //proses input



//backend ===================================================================================================

//index
Route::get('/backendindex','backendController@index');

//inputbacaan
Route::get('/backendinputbacaan','backendController@inputbacaan');
Route::post('/backendinputbacaan/store','backendController@storebackendinputbacaan');

//baca bacaan
Route::get('/bacaan/{id}','backendController@bacabacaan');

//edit bacaan
Route::get('/bacaan/{id}/edit','backendController@editbacaan');
Route::put('/bacaan/{id}','backendController@editbacaanrestore');

//hapus bacaan
Route::delete('/backendindex/bacaan/{id}','backendController@destroybacaan');

//baca pengaduan
Route::get('/pengaduan/{id}','backendController@bacapengaduan');

//hapus pengaduan
Route::delete('/backendindex/pengaduan/{id}','backendController@destroypengaduan');

//input gambargallery
Route::get('/gambargallery/input','backendController@inputgambargallery');
Route::post('/gambargallery/input/store','backendController@storeinputgambargallery');

//edit gambargallery
Route::get('/gambargallery/{id}/edit','backendController@editgambargallery');
Route::put('/gambargallery/input/store/{id}','backendController@storeeditgambargallery');

//hapus gambargallery
Route::delete('/gambargallery/delete/{id}','backendController@destroygambargallery');