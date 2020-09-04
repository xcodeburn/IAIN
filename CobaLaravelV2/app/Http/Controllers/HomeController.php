<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
	public function upload( Request $request){
		$path = Storage::putFile('public', $request->file('image'));
		return view('home');
	}

	/*Membuat review file yang telah diupload*/
	public function show( Request $request){
		// $path = Storage::url('HbMRjZXXhnAhy27lrXRsRFUaKKF3w2HHi9hLq3gX.png');
		// return '<img src="'.$path.'" alt="">';
		// return '<img src="'. asset('/storage/HbMRjZXXhnAhy27lrXRsRFUaKKF3w2HHi9hLq3gX.png').'" alt="">';
	}
}
