<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;

class AuthController extends Controller
{
    public function showLogin(Request $request)
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            return view('auth.android.login');
        }

        return view('auth.web.login');
    }

    public function showSignup(Request $request)
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            return view('auth.android.signup');
        }

        return view('auth.web.signup');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $agent = new Agent();
            
            // Redirect based on device
            if ($agent->isMobile()) {
                return redirect()->intended('/customer/home');
            }
            
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        
        $name = $request->input('name') ?? $request->input('fullName');

        $user = \App\Models\User::create([
            'name' => $name,
            'email' => $validated['email'],
            'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();
        
        $agent = new Agent();
        
        if ($agent->isMobile()) {
            return redirect()->intended('/customer/home');
        }
        
        return redirect()->intended('/admin/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
