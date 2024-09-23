<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchResource;

class ResearchLearningController extends Controller
{
    public function index()
    {
        $resources = ResearchResource::all()->groupBy('type');
        return view('library.research-learning', compact('resources'));
    }
}
