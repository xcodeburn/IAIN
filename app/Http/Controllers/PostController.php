<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
        "title" => "blog",
        "posts" => post::all()
    ]); //tampilkan file yang ada dalam folder view dengan nama blog 
    }
    public function show(post $post){ /* menampilkan single post */
        return view('post',[
        "title" => "single post",
        "post" => $post
    ]); 
    }

}
