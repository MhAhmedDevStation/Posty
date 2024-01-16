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
        // dd($event);
        // return redirect()->action([EventController::class, 'index']);
        // return redirect()->route('events');
        return back();
    }
    public function GetById($id)
    {
        // Logic to fetch event by ID and return the response
        $event = Event::with('user')->find($id);

        if (!$event) {
            // Handle the case where the event with the given ID is not found
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Assuming you want to return JSON, you can use the response() method
        return response()->json(['event' => $event]);
    }


    // public function update(Request $request, $id)
    // {
    //     // dd($request);
    //     // // Validate the request data as needed
    //     // \Illuminate\Support\Facades\Log::info($request);
    //     // \Illuminate\Support\Facades\Log::info($id);
    //     // Find the event by ID
    //     $event = Event::findOrFail($id);

    //     // dd($request);
    //     // Update the event data
    //     // Handle image upload (if a new image is provided)
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('images', 'local');

    //         // Format image information as an array
    //         $imageData = [
    //             'path' => $imagePath,
    //             'name' => $request->file('image')->getClientOriginalName(),
    //             // Add any other information you want to store about the image
    //         ];

    //         // Encode the array as JSON and save it to the 'image' column
    //         $request->image = json_encode($imageData);

    //         // Save the event with the updated image
    //         // $event->save();
    //     }
    //     $event->update($request->all());
    //     $event->load('user');
    //     // Optionally, you can return a response or redirect
    //     return response()->json(['message' => $event]);
    // }
    public function update(Request $request, $id)
    {
        // Find the event by ID
        \Illuminate\Support\Facades\Log::info($request->all());

        $event = Event::findOrFail($id);

        // Check if a new image file is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'local');
            // Format image information as an array
            $imageData = [
                'path' => $imagePath,
                'name' => $request->file('image')->getClientOriginalName(),
                // Add any other information you want to store about the image
            ];

            // Encode the array as JSON and update the 'image' attribute of the event
            $event->image = json_encode($imageData);
        }

        // Update the event with the remaining form data
        $event->update($request->except('image'));
        $event->load('user');

        return response()->json(['message' => $event]);
    }

}