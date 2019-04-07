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

Route::get('/', 'MainController@index');

Route::get('/test', function() {
  return view('tests.blog-single');
});

Route::get('/cv', function() {
  return view('tests.index');
});

Route::get('/admin', function() {
  return view('admin');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profil', 'ProfilController', ['only' => 'show']);
Route::resource('depot', 'DepotController', ['only' => ['create', 'show', 'store', 'destroy', 'index']]);
Route::resource('client', 'ClientController', ['only' => ['create', 'show', 'store', 'destroy', 'index']]);
Route::resource('realisation', 'RealisationController', ['only' => ['create', 'show', 'store', 'destroy', 'index']]);
Route::resource('experience', 'ExperienceController', ['only' => ['create', 'show', 'store', 'destroy', 'index']]);
Route::resource('competence', 'CompetenceController', ['only' => ['create', 'show', 'store', 'destroy', 'index']]);
