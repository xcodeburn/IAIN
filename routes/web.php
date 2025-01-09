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
    // return view('welcome'); //tampilkan file yang ada dalam folder view dengan nama welcome 
    return view('home', [
        "title" => "home"
    ]); //tampilkan file yang ada dalam folder view dengan nama welcome 
});
Route::get('/about', function () {
    return view('about',[
        "name" => "IAIN",
        "email" => "iain.ac.id",
        "title" => "about"
    ]); //tampilkan file yang ada dalam folder view dengan nama about, serta array assosiatif. 
    //key & value "" : untuk string 
});
Route::get('/blog', function () { 
    $blog = 
[
    [
        "title" => "post pertama",
        "slug" => "judul+post+pertama",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ],
    [
        "title" => "post kedua",
        "slug" => "judul+post+kedua",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ]
];
    return view('blog',[
        "title" => "blog",
        "posts" => $blog
    ]); //tampilkan file yang ada dalam folder view dengan nama blog 
});

// single post
Route::get('blog/{slug}', function($slug){
    $blog = 
[
    [
        "title" => "post pertama",
        "slug" => "judul+post+pertama",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ],
    [
        "title" => "post kedua",
        "slug" => "judul+post+kedua",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ]
];
$new_post=[];
foreach ($blog as $post) {
    if ($post["slug"]=== $slug){
        $new_post = $post;
    }
}
  return view('post',[
    "title" => "single post",
    "post" => $new_post
  ]);  
}); /* wildcard untuk mengambil isi apapun dalam slug */


