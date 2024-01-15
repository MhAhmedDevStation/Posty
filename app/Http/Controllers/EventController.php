<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth']);
    // }
    public function index()
    {
        // $events = Event::all();
        $events = Event::with('user')->get();
        // Log the events to the console
        \Illuminate\Support\Facades\Log::info($events);

        return view('events.event', ['events' => $events]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'nb_seats' => 'required|integer|min:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Get the authenticated user
        $user = auth()->user();

        // Create a new Event instance
        $event = new Event($request->all());

        // Associate the event with the authenticated user
        $event->user()->associate($user);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'local');

            // Format image information as an array
            $imageData = [
                'path' => $imagePath,
                'name' => $request->file('image')->getClientOriginalName(),
                // Add any other information you want to store about the image
            ];

            // Encode the array as JSON and save it to the 'image' column
            $event->image = json_encode($imageData);
        }

        // Save the event
        $event->save();

        // Redirect or perform other actions after successful form submission
        return redirect()->route('events');
    }

    public function destroy(Event $event)
    {
        // dd($event);
        $event->delete();
        dd($event);

        // return redirect()->route('events');
        return back();
    }
}