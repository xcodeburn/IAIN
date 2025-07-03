<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\homePostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\postingController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;/* menghubungkam ke file models class post */


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
// fakultas
Route::get('/ftk', function (){
    return view('fakultas.ftk',[
        "title" => "Fakultas Tarbyiah & Keguruan",
        "text"=>"Menyiapkan Pendidik Unggul, Berakhlak, dan Siap Menginspirasi."]);
});
Route::get('/febi', function (){
    return view('fakultas.febi',[
        "title" => "Fakultas Ekonomi & Bisnis Islam",
        "text"=>"Ekonomi Syariah, Masa Depan Berkelanjutan"]);
});
// jurusan
Route::get('/pai', function (){
    return view('fakultas/studi/pai',["title" => "Pendidikan Agama Islam","desc"=>"Membentuk Pendidik Muslim yang Profesional, Berakhlak Mulia, dan Berwawasan Global"]);
});
Route::get('/pgsd', function (){
    return view('fakultas/studi/pgsd',["title" => "Pendidikan Guru Madrasah Ibtidaiyah ( PGMI/PGSD) ","desc"=>"Menjadi Program Studi Pendidikan Guru Madrasah Ibtidaiyah yang unggul dan terkemuka dalam menghasilkan guru yang profesional, berakhlak mulia, dan berkompeten dalam mengembangkan pendidikan dasar Islam yang berkualitas."]);
});
Route::get('/pgpaud', function (){
    return view('fakultas.studi.pgpaud',["title" => "Pendidikan Islam Anak Usia Dini (PIAUD/PAGPAUD) ","desc"=>"Menjadi Program Studi Pendidikan Islam Anak Usia Dini yang unggul dan terkemuka dalam menghasilkan pendidik yang profesional, kreatif, dan berakhlak mulia, serta mampu mengembangkan pendidikan Islam yang berkualitas untuk anak usia dini"]);
});
Route::get('/ekonomi', function (){
    return view('fakultas.studi.eko',["title" => "Ekonomi Syariah","desc"=>"Menjadi Program Studi Ekonomi Syariah yang unggul dan terkemuka dalam menghasilkan lulusan yang kompeten, profesional, dan berintegritas, serta mampu mengembangkan ekonomi syariah yang berkelanjutan dan berkeadilan"]);
});
// no-page
Route::get('/no-page', function(){
    return view('no-page',[
        "title" => "no-page"
    ]);
})->name('no-page');
// login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function(){
    return view('dash.dashboard');
})->name('dashboard')->middleware('auth');

Route::resource('/dash/posts', DashboardPostController::class)->middleware('auth');
// Route::resource('/dashboard', DashboardPostController::class)->middleware('auth');
// blog
/* route dengan menggunakan controller / tanpa clausur*/
Route::get('/blog', [PostController::class, 'index']); /* hubungkan dengan controller */
Route::get('blog/{post:slug}',[PostController::class, 'show']); /* wildcard untuk mengambil isi apapun dalam slug */