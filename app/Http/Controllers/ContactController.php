<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail; // Import the Mailable
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function showForm()
    {
        $user = auth()->user();
        return view('contact.form', ['userId' => $user]);
    }

   public function submitForm(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        // Store the form data in a variable
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ];
    
        try {
            // Send an email using the ContactMail Mailable
            Mail::to('mh.ahmed.dev@gmail.com')->send(new ContactMail($data));

            // Optionally, you can do additional actions (e.g., store in the database)

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the exception and handle it accordingly
            return redirect()->back()->withErrors(['error' => 'Failed to send the message. Please try again.']);
        }
    }
}
