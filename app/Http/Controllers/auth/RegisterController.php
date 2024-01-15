<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $req)
    {
        // validations

        $this->validate($req, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        // store user
        User::create([
            'lastname' => $req->lastname,
            'firstname' => $req->firstname,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        // sign
        auth()->attempt($req->only('email', 'password'));
        //redirect

        return redirect()->route('dashboard');
    }
}