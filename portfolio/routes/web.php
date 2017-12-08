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
Route::get('/','AccueilController@index');
Route::get('/quisuisje','AccueilController@quisuisje');
Route::get('/formation','AccueilController@formation');
Route::get('/competence','AccueilController@competence');
Route::get('/projet','AccueilController@projet');
Route::get('/contact','AccueilController@contact');
Route::post('/gocontact','AccueilController@envoimail');
Route::get('/connexion','AccueilController@connection');
Route::post('/goconnexion','AccueilController@goconnection');
Route::get('/home','AccueilController@home');
Route::get('/mail','AccueilController@mail');
Route::get('/deconnection','AccueilController@deconnection');
Route::get('/delete','AccueilController@delete');
