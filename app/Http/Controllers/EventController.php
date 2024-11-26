<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Artisan;

class EventController extends Controller
{
    // Display a listing of events
    public function index()
    {
        $events = Event::paginate(15);

        return view('backend.events.index', compact('events'));
    }


    // Show the form for creating a new event
    public function create()
    {
        $categories = Category::where('digital', 2)->get();
        return view('backend.events.create', compact('categories'));
    }

    // Store a newly created event in storage
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'registration_link' => 'required|url',
            'category_id' => 'required|exists:categories,id', // Ensures a valid category
            'image' => 'nullable'
        ]);

        // Create a new event with the validated data
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'registration_link' => $request->registration_link,
            'category_id' => $request->category_id, // Associate with the selected category
            'image' => $request->image,
        ]);

        flash(translate('Event has been inserted successfully'))->success();

        Artisan::call('view:clear');
        Artisan::call('cache:clear');



        // Redirect back to the events page with a success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Display the specified event
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('backend.events.show', compact('event'));
    }

    // Show the form for editing the specified event
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $event->start_date = Carbon::parse($event->start_date); // Convert to Carbon instance
        $categories = Category::where('digital', 2)->get();

        return view('backend.events.edit', compact('event', 'categories'));
    }

    // Update the specified event in storage
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'start_date' => 'required|date',
            'registration_link' => 'required|url',
            'image' => 'nullable'
        ]);


        $event->update($request->all());

        flash(translate('Event has been updated successfully'))->success();
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        return back();
    }

    // Remove the specified event from storage
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        flash(translate('Event has been deleted successfully'))->success();
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        return back();
    }


    public function userIndex()
    {
        // Fetch all categories where `digital = 2` along with their associated events
        $categories = Category::where('digital', 2)->with('events')->get();
    
        // Fetch all events where their associated category has `digital = 2`
        $allEvents = Event::with('category')
            ->whereHas('category', function ($query) {
                $query->where('digital', 2);
            })
            ->get();
    



        // Pass both `categories` and `allEvents` to the view
        return view('frontend.events.index', compact('categories', 'allEvents'));
    }
    
    public function userShow($id)
    {
        $event = Event::with('category')->findOrFail($id);
        return view('frontend.events.show', compact('event'));
    }
}
