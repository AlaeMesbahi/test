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

Route::get('/','MyController@dash')->name('dash');
Route::get('/profile','MyController@profile')->name('profile');
Route::get('/error','MyController@error')->name('error');
Route::get('/blank','MyController@blank')->name('blank');
Route::get('/map','MyController@map')->name('map');
Route::get('/tb','MyController@table')->name('tb');
