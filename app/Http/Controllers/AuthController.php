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
        // Validasi input dari form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika user ditemukan
        if ($user) {
            // Verifikasi password dengan hash yang ada di database
            if (Hash::check($request->password, $user->password)) {
                // Jika login berhasil, login pengguna
                Auth::login($user);

                // Redirect ke halaman dashboard atau halaman lain setelah login berhasil
                return redirect()->route('home'); // Ganti 'dashboard' dengan route yang sesuai
            }
        }

        // Jika login gagal, kembali ke form login dengan pesan error
        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

