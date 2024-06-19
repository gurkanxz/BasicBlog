<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\urunlerKategoriController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::get('/',[urunlerKategoriController::class,'indexFunction'])->name('indexName');
//Route::get('urunlerKategoriPage',[urunlerKategoriController::class,'urunlerKategoriFunction'])->name('urunlerKategoriName');
//Route::get('cepTelefonlariPage',[urunlerKategoriController::class,'cepTelefonlariFunction'])->name('cepTelefonlariName');
//Route::get('notebookPage',[urunlerKategoriController::class,'notebookFunction'])->name('notebookName');
//Route::get('masaustuPage',[urunlerKategoriController::class,'masaustuFunction'])->name('masaustuName');

//Route::get('cepTelefonlariForm',[urunlerKategoriController::class,'formFunction'])->name('formName');
//Route::post('cepTelefonlariEkle',[urunlerKategoriController::class,'ekleFunction'])->name('ekleName');

//Route::get('cepTelefonlariGuncelleForm/{id}',[urunlerKategoriController::class,'guncelleFormFunction'])->name('guncelleFormName');
//Route::post('cepTelefonlariGuncelle/{id}',[urunlerKategoriController::class,'guncelleFunction'])->name('guncelleName');


Route::controller(urunlerKategoriController::class)->group(function(){
    Route::get('/','indexFunction')->name('indexName');
    Route::get('cepTelefonlariPage','cepTelefonlariFunction')->name('cepTelefonlariName');
    Route::get('notebookPage','notebookFunction')->name('notebookName');
    Route::get('masaustuPage','masaustuFunction')->name('masaustuName');
    
    Route::get('cepTelefonlariForm','formFunction')->name('formName');
    Route::post('cepTelefonlariEkle','ekleFunction')->name('ekleName');

    Route::get('cepTelefonlariGuncelleForm/{id}','guncelleFormFunction')->name('guncelleFormName');
    Route::post('cepTelefonlariGuncelle/{id}','guncelleFunction')->name('guncelleName');

    Route::get('silPage/{id}','silFunction')->name('silName');


 });

 Route::controller(AuthController::class)->group(function(){
    Route::get('/register','registerFunction')->name('registerName');
    Route::post('/register','registerFunction')->name('registerName');

    Route::get('/login','loginFunction')->name('loginName');
    Route::post('/login','loginFunction')->name('loginName');

    Route::get('/logout','logoutFunction')->name('logoutName');    
  });
