<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
	public function upload( Request $request){
		$path = Storage::putFile('img', $request->file('image'));
		dd($path);
	}
}
