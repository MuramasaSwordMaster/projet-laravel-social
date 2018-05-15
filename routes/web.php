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

Route::get('/', 'PagesController@accueil');
Route::get('/mon-compte', 'PagesController@compte');
Route::get('/mes-messages', 'PagesController@messages');
Route::get('/administration', 'PagesController@administration');




