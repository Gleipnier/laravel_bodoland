<?php

namespace App\Http\Controllers;
use App\Models\SportsOfficer;
use Illuminate\Http\Request;

class OfficersController extends Controller
{
    public function index()
    {
        $sportsofficers = SportsOfficer::orderBy('created_at', 'desc')->get();
        return view('posts.indexofficers', compact('sportsofficers'));
    }
}
