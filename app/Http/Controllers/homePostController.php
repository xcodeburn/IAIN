<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class homePostController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "home",
            "posts" => post::latest()->take(3)->get()
    ]); //tampilkan file yang ada dalam folder view dengan nama blog 
    }
    public function show(post $post){ /* menampilkan single post */
        return view('post',[
        "title" => "single post",
        "post" => $post
    ]); 
    }
}
