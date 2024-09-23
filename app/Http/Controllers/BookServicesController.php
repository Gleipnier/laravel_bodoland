<?php

namespace App\Http\Controllers;

use App\Models\BookService;
use Illuminate\Http\Request;

class BookServicesController extends Controller
{
    public function index()
    {
        $services = BookService::all()->groupBy('category');
        return view('library.book-services', compact('services'));
    }
}
