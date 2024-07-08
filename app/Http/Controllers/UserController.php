<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $req) {
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed', 
            'age'=> 'required|numeric',
            'role'=> 'required'
        ]);

        // Hash the password before saving
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }
    }

    public function login(Request $req) {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function dashBoardPage() {
            return view('dashboard');
        }

    public function innerPage() {
             return view('inner'); 
    }

    public function logout() {
        Auth::logout();
        return view('login');
    }
}

