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

Route::get('/', 'PagesController@home');
Route::get('/welcome', 'PagesController@welcome');
Route::get('/about', 'PagesController@about');

#menuju tampilan Data Penduduk
Route::get('/Penduduks', 'DatasController@index');

/*Untuk menampilkan logo Rohil*/
Route::get('home', 'HomeController@show');
Route::post('upload', 'HomeController@upload');