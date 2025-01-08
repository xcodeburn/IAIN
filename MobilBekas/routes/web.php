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

Route::get('/', function () {
    // return view('welcome');
    return view('Home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    // return view('welcome');
    return view('about',[
        "title" => "about",
        "name" => "Go go",
        "email" => "c@lost",
        "image" => "go.jpg"
    ]);
});
Route::get('/ctf', function(){
    return view('ctf',[
    "title" => "AKBAR_CTF"]);
});




Route::get('/blog', function () {
    $bp = [
    [
        "title" => "judul pertama",
        "slug" => "judul+post+pertama",
        "author" => "broku",
        "body" => "
Lorem ipsum dolor, sit amet consectetur adipisicing elit. In officia, quo ratione perspiciatis sint possimus doloribus necessitatibus iusto eum vitae itaque mollitia laboriosam dolorum enim. Excepturi, cum voluptatibus ipsam quos esse nemo quo magnam nisi facilis molestiae dicta, dolor hic iste illum eius unde corrupti non provident, repellendus omnis fugit voluptas recusandae. Earum necessitatibus sapiente cupiditate blanditiis doloribus alias totam consequuntur praesentium? Et, accusantium harum in vel non, fugiat repellendus exercitationem expedita doloremque, veritatis corrupti minus. Tempora, doloremque! Hic, iusto."
    ],[
        "title" => "judul kedua",
        "slug" => "judul+post+kedua",
        "author" => "broku",
        "body" => "
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod sed adipisci enim ipsam doloribus aliquid aspernatur, commodi tempore doloremque ea culpa! Non ipsam, cupiditate dolore id, quos sunt a laboriosam obcaecati assumenda itaque deleniti molestiae consectetur optio repudiandae doloremque hic eius ab, illo accusantium repellat. Nam quos nostrum soluta ipsum harum nobis aspernatur facere aut odio impedit reiciendis minima earum dignissimos labore dolorum, id porro ad consequatur blanditiis! Neque, delectus accusantium animi repellendus iusto minus labore molestias corporis nisi laborum nemo repudiandae et magni. Incidunt eveniet numquam, quod placeat dicta corrupti possimus provident dolor? Quia saepe dolorem adipisci minus."
    ]
    ];
    // return view('welcome');
    return view('blog', [
        "title" => "blog",
        "post" => $bp
    ]);
});

//halaman post tunggal
Route::get('post/{slug}', function($slug){
    $bp = [
    [
        "title" => "judul pertama",
        "slug" => "judul+post+pertama",
        "author" => "broku",
        "body" => "
Lorem ipsum dolor, sit amet consectetur adipisicing elit. In officia, quo ratione perspiciatis sint possimus doloribus necessitatibus iusto eum vitae itaque mollitia laboriosam dolorum enim. Excepturi, cum voluptatibus ipsam quos esse nemo quo magnam nisi facilis molestiae dicta, dolor hic iste illum eius unde corrupti non provident, repellendus omnis fugit voluptas recusandae. Earum necessitatibus sapiente cupiditate blanditiis doloribus alias totam consequuntur praesentium? Et, accusantium harum in vel non, fugiat repellendus exercitationem expedita doloremque, veritatis corrupti minus. Tempora, doloremque! Hic, iusto."
    ],[
        "title" => "judul kedua",
        "slug" => "judul+post+kedua",
        "author" => "broku",
        "body" => "
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod sed adipisci enim ipsam doloribus aliquid aspernatur, commodi tempore doloremque ea culpa! Non ipsam, cupiditate dolore id, quos sunt a laboriosam obcaecati assumenda itaque deleniti molestiae consectetur optio repudiandae doloremque hic eius ab, illo accusantium repellat. Nam quos nostrum soluta ipsum harum nobis aspernatur facere aut odio impedit reiciendis minima earum dignissimos labore dolorum, id porro ad consequatur blanditiis! Neque, delectus accusantium animi repellendus iusto minus labore molestias corporis nisi laborum nemo repudiandae et magni. Incidunt eveniet numquam, quod placeat dicta corrupti possimus provident dolor? Quia saepe dolorem adipisci minus."
    ]
    ];
$newpost = [];
    foreach ($bp as $bp ) {
        if($bp['slug'] === $slug){
            $newpost = $bp;
        }
    }
    return view('post',[
        "title" => "single post",
        "bp" => $newpost
    ]);
});