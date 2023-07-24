<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
