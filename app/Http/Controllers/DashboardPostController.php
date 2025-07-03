<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dash.posts.index',[
            "data" => post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    // Validasi input
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts',
        'body' => 'required',
        'author' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);

    // Menangani file gambar
    if ($request->file('image')) {
        // Dapatkan ekstensi asli file
        $extension = $request->file('image')->getClientOriginalExtension();
        // Dapatkan nama asli file
        $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
        // Untuk mencegah konflik nama file yang sama, kita bisa menambahkan timestamp
        $fileName = $originalName . '-' . time() . '.' . $extension;
        // Tentukan path tujuan penyimpanan di folder public/img
        $filePath = public_path('img/' . $fileName);
        // Pindahkan file ke folder public/img
        $request->file('image')->move(public_path('img'), $fileName);   
    }
    // Menyimpan data postingan
    $validatedData['id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    $validatedData['img'] = $fileName;
    // Simpan postingan baru
    Post::create($validatedData);

    return redirect('/dash/posts')->with('Success', 'berhasil menambahkan postingan baru');
}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
