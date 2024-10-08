<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhoIsWho;
use Illuminate\Support\Facades\Storage;

class WhoIsWhoController extends Controller
{
    public function index()
    {
        $whoiswhos = WhoIsWho::all();
        return view('admin.whoiswho.index', compact('whoiswhos'));
    }

    public function create()
    {
        return view('admin.whoiswho.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/whoiswho', 'public'); // Store in public disk
            $validated['image_url'] = Storage::url($path); // Get URL to store in DB
        }

        WhoIsWho::create($validated);

        return redirect()->route('whoiswho.index')->with('success', 'WhoIsWho created successfully.');
    }

    public function edit(WhoIsWho $whoiswho)
    {
        return view('admin.whoiswho.edit', compact('whoiswho'));
    }

    public function update(Request $request, WhoIsWho $whoiswho)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload if a new file is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($whoiswho->image_url) {
                $oldImagePath = str_replace('/storage/', '', $whoiswho->image_url); // Remove public path for deletion
                Storage::disk('public')->delete($oldImagePath);
            }

            $path = $request->file('image')->store('images/whoiswho', 'public');
            $validated['image_url'] = Storage::url($path); // Get URL to store in DB
        }

        $whoiswho->update($validated);

        return redirect()->route('whoiswho.index')->with('success', 'WhoIsWho updated successfully.');
    }

    public function destroy(WhoIsWho $whoiswho)
    {
        $whoiswho->delete();

        return redirect()->route('whoiswho.index')->with('success', 'WhoIsWho deleted successfully.');
    }
}
