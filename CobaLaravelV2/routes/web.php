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

/*Route::get('/', function () {
    return view('welcome');
});*/

#menuju tampilan home / tampilan welcome / index
Route::get('/', 'PagesController@home');
Route::get('/welcome', 'PagesController@welcome');
#menuju tampilan about
Route::get('/about', 'PagesController@about');

Route::post('upload', 'HomeController@upload');
