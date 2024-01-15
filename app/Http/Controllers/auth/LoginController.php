<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    function index()
    {
        return view('auth.login');
    }

    function store(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!auth()->attempt($req->only('email', 'password'))) {
            return back()->with('status', 'Invalide login details');
        }
        ;
        return redirect()->route('dashboard');

    }
    // public function store(Request $req)
    // {
    //     $validator = Validator::make($req->all(), [
    //         'login' => 'required',
    //         'password' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     $credentials = [
    //         'password' => $req->password,
    //     ];

    //     // Check if the login input is a valid email address
    //     if (filter_var($req->login, FILTER_VALIDATE_EMAIL)) {
    //         $credentials['email'] = $req->login;
    //     } else {
    //         // If not an email, assume it's a username
    //         $credentials['username'] = $req->login;
    //     }

    //     if (auth::attempt($credentials)) {
    //         return redirect()->route('dashboard');
    //     } else {
    //         return back()->with('status', 'Invalid login details')->withInput();
    //     }
    // }
}
