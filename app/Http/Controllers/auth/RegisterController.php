<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
    // public function store(Request $req)
    // {
    //     // validations

    //     $this->validate($req, [
    //         'firstname' => 'required|max:255',
    //         'lastname' => 'required|max:255',
    //         'username' => 'required|max:255',
    //         'email' => 'required|email|max:255',
    //         'password' => 'required|confirmed',
    //     ]);

    //     // store user
    //     User::create([
    //         'lastname' => $req->lastname,
    //         'firstname' => $req->firstname,
    //         'username' => $req->username,
    //         'email' => $req->email,
    //         'password' => Hash::make($req->password),
    //     ]);
    //     // sign
    //     auth()->attempt($req->only('email', 'password'));
    //     //redirect

    //     return redirect()->route('dashboard');
    // }
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
        // dd($req);
        // store user
        try {
            // store user
            $user = User::create([
                'lastname' => $req->lastname,
                'firstname' => $req->firstname,
                'username' => $req->username,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            ]);
            // dd($user);
            // $user->sendEmailVerificationNotification();
            // sign in
            auth()->attempt($req->only('email', 'password'));
            // redirect
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            // Log the exception and any relevant information
            Log::error('User registration failed', [
                'exception_message' => $e->getMessage(),
                'user_email' => $req->email,
                'user_username' => $req->username,
            ]);

            // Handle the exception as needed
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
    protected function registered(Request $request, $user)
    {
        $user->sendEmailVerificationNotification();
    }
}
