<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function Penduduk(){
        return view('Penduduk.index', ['name' => "Halaman Data penduduk"]);
    }
    public function about(){
    	return view('about', ['name' => "Halaman Visi dan Misi"]);
    }
    public function welcome(){
    	return view('welcome');
    }

    public function list(){
    	$files = Storage::files('');
    	dd($files);
    }
}
