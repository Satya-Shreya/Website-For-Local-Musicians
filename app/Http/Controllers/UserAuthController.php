<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.user_login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && Auth::user()->role === 'user') {
            return redirect()->route('user.dashboard');
        }
        return back()->withErrors(['Invalid credentials or role.']);
    }

    public function showRegisterForm() {
        return view('auth.user_register');
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
            'role' => 'user',
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('user.dashboard');
    }
}
