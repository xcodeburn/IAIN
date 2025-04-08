<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\homePostController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [homePostController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about',[
        "name" => "IAIR",
        "email" => "iair.ac.id",
        "title" => "about",
        "image" => "iain-mod.png"
    ]); //tampilkan file yang ada dalam folder view dengan nama about, serta array assosiatif. 
    //key & value "" : untuk string 
});

Route::get('/fai', function (){
    return view('fai',["title" => "Pendidikan Agama Islam"]);
});
Route::get('/pgpaud', function (){
    return view('pgpaud',["title" => "PIAUD | PGPAUD"]);
});
Route::get('/pgsd', function (){
    return view('pgsd',["title" => "PGSD | PGMI"]);
});
Route::get('/ekonomi', function (){
    return view('ekonomi',["title" => "Ekomoni"]);
});

Route::get('/no-page', function(){
    return view('no-page',[
        "title" => "no-page"
    ]);
})->name('no-page');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/* route dengan menggunakan controller / tanpa clausur*/
Route::get('/blog', [PostController::class, 'index']); /* hubungkan dengan controller */
Route::get('blog/{post:slug}',[PostController::class, 'show']); /* wildcard untuk mengambil isi apapun dalam slug */


