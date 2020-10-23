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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'TraitementController@index')->name('home');
    Route::get('back/traitement','TraitementController@index')->name('backtraitement');
    Route::post('back/traited','TraitementController@traitementimages')->name('traitementstart');
    Route::post('back/generate','TraitementController@seedergene')->name('traitementseeder');
    Route::post('back/bddgenerate', 'TraitementController@set_data')->name('genbdd');
    Route::get('/download', 'TraitementController@getDownload');
});



  Route::resource('/', 'FrontController');
  Route::get('img/{id}', 'FrontController@show')->name('viewimg');



Auth::routes(['register' => false]);


