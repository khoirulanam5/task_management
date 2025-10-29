<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Ambil email dan password dari request
        $credentials = $request->only('email', 'password');

        try {
            // autentikasi menggunakan JWT
            if (!$token = JWTAuth::attempt($credentials)) {
                return back()->with('pesan', 'Email atau password salah.');
            }
        } catch (JWTException $err) {
            // Jika ada error (misalnya server issue)
            return back()->with('pesan', 'Terjadi kesalahan saat membuat token.');
        }

        // akan menyimpan user yang sedang login ke session Laravel
        Auth::login(auth()->user());
        $request->session()->regenerate();
        session(['jwt_token' => $token]);

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        try {
            // Invalidate token JWT yang sedang aktif
            JWTAuth::invalidate(JWTAuth::getToken());
        } catch (JWTException $err) {

        }

        // Hapus token JWT yang tersimpan di session
        $request->session()->forget('jwt_token');

        // Hapus semua data session yang aktif
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function log()
    {
        try {
            // Ambil token JWT dari request
            $user = JWTAuth::parseToken()->authenticate();

            // Jika token valid dan user ditemukan, kembalikan data user dalam bentuk JSON
            return response()->json($user);
        } catch (\Exception $err) {
            // Jika terjadi error (misalnya token tidak valid, kadaluarsa
            return response()->json(['error' => 'Token tidak valid atau kadaluarsa'], 401);
        }
    }

    public function regist()
    {
        return view('auth.regist');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran akun berhasil.');
    }
}
