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


Route::resource('/', 'FrontController');
  Route::get('back/traitement','TraitementController@index')->name('backtraitement');
  Route::post('back/traited','TraitementController@traitementimages')->name('traitementstart');
  Route::post('back/generate','TraitementController@seedergene')->name('traitementseeder');
