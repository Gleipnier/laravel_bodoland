<?php

namespace App\Http\Controllers;
use App\Models\information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $information = information::orderBy('created_at', 'desc')->get();
        return view('posts.indexinformation', compact('information'));
    }
}
