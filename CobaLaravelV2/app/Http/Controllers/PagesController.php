<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function about(){
    	return view('about', ['name' => "tentang cinta"]);
    }
    public function welcome(){
    	return view('welcome');
    }

    public function list(){
    	$files = Storage::files('');
    	dd($files);
    }
}
