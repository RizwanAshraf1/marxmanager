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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'BookMarksController@index')->name('home');
Route::post('store', ['as'=>'bookmarks.store','uses'=>'BookMarksController@store']);
Route::delete('/bookmark/{id}', 'BookMarksController@destroy');

