<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Library;
use App\Models\Subdivision;


class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all(); // Eager load subdivisions
        return view('admin.libraries.index', compact('libraries'));
    }

    public function create()
    {
        $subdivisions = Subdivision::all(); // Fetch all subdivisions for dropdown
        return view('admin.libraries.create', compact('subdivisions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subdivision_id' => 'required|exists:subdivisions,id', // Validate subdivision ID
        ]);

        Library::create($validated);

        return redirect()->route('libraries.index')->with('success', 'Library created successfully.');
    }

    public function show(Library $library)
    {
        return view('admin.libraries.show', compact('library'));
    }

    public function edit(Library $library)
    {
        $subdivisions = Subdivision::all(); // Fetch all subdivisions for dropdown
        return view('admin.libraries.edit', compact('library', 'subdivisions'));
    }

    public function update(Request $request, Library $library)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subdivision_id' => 'required|exists:subdivisions,id',
        ]);

        $library->update($validated);

        return redirect()->route('libraries.index')->with('success', 'Library updated successfully.');
    }

    public function destroy(Library $library)
    {
        $library->delete();
        return redirect()->route('libraries.index')->with('success', 'Library deleted successfully.');
    }
}
