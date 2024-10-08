<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Show all events
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('admin.events.create');
    }

    // Store a newly created event
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'location' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Show the form for editing an event
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Update the event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'location' => 'required',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Delete an event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
