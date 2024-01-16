<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    public function index()
    {
        // dd(auth()->user());
        return view('dashboard');
    }
    public function sendTestEmail()
    {
        Mail::raw('Test email content', function ($message) {
            $message->to('anouarbader12@gmail.com');
            $message->subject('Test Email');
        });

        return 'Test email sent successfully';
    }
}