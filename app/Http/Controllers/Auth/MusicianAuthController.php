<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MusicianAuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.musician_login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && Auth::user()->role === 'musician') {
            return redirect()->route('musician.dashboard');
        }
        return back()->withErrors(['Invalid credentials or role.']);
    }

    public function showRegisterForm() {
        return view('auth.musician_register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'musician',
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('musician.dashboard');
    }
}
