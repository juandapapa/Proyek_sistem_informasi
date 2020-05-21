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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    //KelompokTani  
    Route::get('/KelompokTani/NonAktif','KelompokTaniController@tampil_hapus')->name('KelompokTani.tampil_hapus');//NonAktif
    Route::get('/KelompokTani/aktif/{id}','KelompokTaniController@restore')->name('KelompokTani.restore');//Aktif
    Route::delete('/kelompoktani/delete/{id}','KelompokTaniController@kill')->name('KelompokTani.kill');//Delete
    Route::resource('/KelompokTani','KelompokTaniController');//index    
    //PPL
    Route::resource('/ppl','pplController');//index


    //pengajuan Rencana Definitif Kebutuhan Kelompok
    // Route::get('/pengajuan_rdkk/search', 'RdkkController@search');
    Route::get('/pengajuan_rdkk/search', 'RdkkController@search');
    Route::resource('/pengajuan_rdkk','RdkkController');
    
    
  
});



