<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {

        return view('index');

    }

    public function store(Request $request) {

        $username = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $confirm  = $request->confirm;

        // Validation of inputs fields
        $request->validate([
            'name'     => ['required', 'string', 'max:255', 'unique:users,name'],
            'email'    => ['required', 'string', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Insert into database
        User::create([
            'name'     => $username,
            'email'    => $email,
            'password' => $password,
        ]);

        return view("success");
    }
}
