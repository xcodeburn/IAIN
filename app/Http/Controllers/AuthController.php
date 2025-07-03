<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }
    // Menangani login tanpa salt, menggunakan hashing default Laravel
    public function login(Request $request)
{
    //dd($request->all());
    $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required',
    ]);

    $user = User::where('email',$credentials['email'])->first();
    if($user && Hash::check($credentials['password'], $user->password)){
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return back()->withErrors([
        'email' => 'Login Failed',
    ])->withInput();
}
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

