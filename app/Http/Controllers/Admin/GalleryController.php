<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'category' => 'nullable|string|max:255',
            'gallery_image_title' => 'required|string|max:255',
            'gallery_image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('gallery_image_url')) {
            // Store the image in the public disk
            $path = $request->file('gallery_image_url')->store('images/gallery', 'public');
            // Get the URL to store in the database
            $validated['gallery_image_url'] = Storage::url($path); 
        }

        // Create a new Gallery entry with the validated data
        Gallery::create($validated);

        // Redirect back with a success message
        return redirect()->route('gallery.index')->with('success', 'Gallery image created successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'category' => 'nullable|string|max:255',
            'gallery_image_title' => 'required|string|max:255',
            'gallery_image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload if a new file is provided
        if ($request->hasFile('gallery_image_url')) {
            // Delete the old image if it exists
            if ($gallery->gallery_image_url) {
                $oldImagePath = str_replace('/storage/', '', $gallery->gallery_image_url); // Remove public path for deletion
                Storage::disk('public')->delete($oldImagePath);
            }

            // Store the new image
            $path = $request->file('gallery_image_url')->store('images/gallery', 'public');
            $validated['gallery_image_url'] = Storage::url($path); // Get URL to store in DB
        }

        // Update the gallery item with the validated data
        $gallery->update($validated);

        // Redirect back with success message
        return redirect()->route('gallery.index')->with('success', 'Gallery image updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery image deleted successfully.');
    }
}
