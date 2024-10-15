<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subdivision;
use App\Models\Division;


class SubdivisionController extends Controller
{
    public function index()
    {
        $subdivisions = Subdivision::all();
        return view('admin.subdivisions.index', compact('subdivisions'));
    }

    public function create()
    {
        $divisions = Division::all(); // Fetch divisions for the dropdown
        return view('admin.subdivisions.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|exists:divisions,id', // Validate division ID
        ]);

        Subdivision::create($request->all());

        return redirect()->route('subdivisions.index')->with('success', 'Subdivision created successfully.');
    }

    public function show(Subdivision $subdivision)
    {
        return view('admin.subdivisions.show', compact('subdivision'));
    }

    public function edit(Subdivision $subdivision)
    {
        $divisions = Division::all(); // Fetch divisions for the dropdown
        return view('admin.subdivisions.edit', compact('subdivision', 'divisions'));
    }

    public function update(Request $request, Subdivision $subdivision)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|exists:divisions,id', // Validate division ID
        ]);

        $subdivision->update($request->all());

        return redirect()->route('subdivisions.index')->with('success', 'Subdivision updated successfully.');
    }

    public function destroy(Subdivision $subdivision)
    {
        $subdivision->delete();
        return redirect()->route('subdivisions.index')->with('success', 'Subdivision deleted successfully.');
    }
}
