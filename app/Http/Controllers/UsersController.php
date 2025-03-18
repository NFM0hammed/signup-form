<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function signin() {

        if(auth()->check()) {

            return redirect()->route('profile');

        }

        return view('signin');

    }

    public function login(Request $request) {

        $credintals = $request->validate([

            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);

        if (auth()->attempt($credintals)) {

            return redirect()->route('profile');

        } else {

            return back()->with('status', 'Invalid login details');

        }

    }

    public function signup() {

        if(auth()->check()) {

            return redirect()->route('profile');

        }

        return view('signup');

    }

    public function store(Request $request) {

        $username = $request->name;

        $email = $request->email;

        $password = $request->password;

        $request->validate([

            'name' => ['required', 'string', 'max:255', 'unique:users'],

            'email' => ['required', 'email', 'max:255', 'unique:users'],

            'password' => ['required', 'string', 'min:8'],

        ]);

        User::create([

            'name' => $username,

            'email' => $email,

            'password' => bcrypt($password),

        ]);

        return redirect()->route('login');

    }

    public function profile() {

        return view('/profile', ['user' => auth()->user()]);

    }

    public function logout() {

        auth()->logout();

        return redirect()->route('signin');

    }

}
