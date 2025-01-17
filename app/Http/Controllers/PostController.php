<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
        "title" => "blog",
        "posts" => post::all()
    ]); //tampilkan file yang ada dalam folder view dengan nama blog 
    }
    public function show($slug){
        return view('post',[
        "title" => "single post",
        "post" => post::find($slug)
    ]); 
    }

}