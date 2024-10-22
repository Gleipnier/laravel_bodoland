<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    // Display a listing of the notifications
    public function index()
    {
        $notifications = Notification::all();
        return view('admin.notifications.index', compact('notifications'));
    }

    // Show the form for creating a new notification
    public function create()
    {
        return view('admin.notifications.create');
    }

    // Store a newly created notification in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'document' => 'nullable|file|mimes:pdf,docx,jpg,png|max:2048',
        ]);

        $documentPath = null;
        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('images/gallery', 'public');
        }

        Notification::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'document' => $documentPath,
        ]);

        return redirect()->route('notifications.index')->with('success', 'Notification created successfully.');
    }

    // Display the specified notification
    public function show(Notification $notification)
    {
        return view('admin.notifications.show', compact('notification'));
    }

    // Show the form for editing the specified notification
    public function edit(Notification $notification)
    {
        return view('admin.notifications.edit', compact('notification'));
    }

    // Update the specified notification in the database
    public function update(Request $request, Notification $notification)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'document' => 'nullable|file|mimes:pdf,docx,jpg,png|max:2048',
        ]);

        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('images/gallery', 'public');
        } else {
            $documentPath = $notification->document;
        }

        $notification->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'document' => $documentPath,
        ]);

        return redirect()->route('notifications.index')->with('success', 'Notification updated successfully.');
    }

    // Remove the specified notification from the database
    public function destroy(Notification $notification)
    {
        if ($notification->document) {
            \Storage::delete($notification->document);
        }
        $notification->delete();

        return redirect()->route('notifications.index')->with('success', 'Notification deleted successfully.');
    }
}
