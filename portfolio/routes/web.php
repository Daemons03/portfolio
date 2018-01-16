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
Route::get('/apropos','AccueilController@quisuisje');
Route::get('/projet','AccueilController@projet');
Route::get('/contact','AccueilController@contact');
Route::post('/gocontact','AccueilController@envoimail');
Route::get('/connexion','AdminController@connection');
Route::post('/goconnexion','AdminController@goconnection');
Route::get('/home','AdminController@home');
Route::get('/mail','AdminController@mail');
Route::get('/newprojet','AdminController@newprojet');
Route::post('/goprojet','AdminController@goprojet');
Route::get('/modifinfo','AdminController@modifinfo');
Route::post('/gomodifinfo','AdminController@gomodifinfo');
Route::get('/deconnection','AdminController@deconnection');
Route::get('/delete','AdminController@delete');
