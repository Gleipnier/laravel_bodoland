<?php

namespace App\Http\Controllers;

use App\Models\BookService;
use App\Models\Book;
use Illuminate\Http\Request;

class BookServicesController extends Controller
{
    public function index()
    {

        $recentBooks = Book::with('library')->latest()->take(5)->get();
        $services = BookService::all()->groupBy('category');
        return view('library.book-services', compact('services','recentBooks'));
    }
}
