<?php

namespace App\Http\Controllers;

use App\Models\LatestUpdate;
use Illuminate\Http\Request;

class LatestUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $updates = LatestUpdate::all();
        return view('admin.latest-updates.index', compact('updates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.latest-updates.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url',
            'date' => 'required|date',
            'is_new' => 'boolean',
        ]);
    
        LatestUpdate::create($validatedData);
    
        return redirect()->route('admin.latest-updates.index')->with('success', 'Update created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LatestUpdate $latestUpdate)
    {
        return view('admin.latest-updates.edit', compact('latestUpdate'));
    }

    public function update(Request $request, LatestUpdate $latestUpdate)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|url',
            'date' => 'required|date',
            'is_new' => 'boolean',
        ]);

        $latestUpdate->update($validatedData);

        return redirect()->route('latest-updates.index')->with('success', 'Update modified successfully');
    }

    public function destroy(LatestUpdate $latestUpdate)
    {
        $latestUpdate->delete();

        return redirect()->route('latest-updates.index')->with('success', 'Update deleted successfully');
    }
}
