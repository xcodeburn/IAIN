<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\post;/* menghubungkam ke file models class post */

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
/* route dengan menggunakan clausur */
Route::get('/', function () {
    // return view('welcome'); //tampilkan file yang ada dalam folder view dengan nama welcome 
    return view('home', [
        "title" => "home"
    ]); //tampilkan file yang ada dalam folder view dengan nama welcome 
});
Route::get('/about', function () {
    return view('about',[
        "name" => "IAIR",
        "email" => "iair.ac.id",
        "title" => "about",
        "image" => "iain-mod.png"
    ]); //tampilkan file yang ada dalam folder view dengan nama about, serta array assosiatif. 
    //key & value "" : untuk string 
});
Route::get('/no-page', function(){
    return view('no-page',[
        "title" => "no-page"
    ]);
});

/* route dengan menggunakan controller / tanpa clausur*/
Route::get('/blog', [PostController::class, 'index']); /* hubungkan dengan controller */
Route::get('blog/{post:slug}',[PostController::class, 'show']); /* wildcard untuk mengambil isi apapun dalam slug */


