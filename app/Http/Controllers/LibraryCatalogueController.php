<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Journal;
use App\Models\Division;
use App\Models\EResource;
use Illuminate\Http\Request;

class LibraryCatalogueController extends Controller
{
    public function home()
{
    $recentBooks = Book::latest()->take(5)->get();
    $recentJournals = Journal::latest()->take(5)->get();
    $recentEResources = EResource::latest()->take(5)->get();
    
    return view('library.bookhome', compact('recentBooks', 'recentJournals', 'recentEResources'));
}

public function books()
{
    $books = Book::with('library')->paginate(12);
    return view('library.books', compact('books'));
}

public function journals()
{
    $journals = Journal::with('issues')->paginate(12);
    return view('library.journals', compact('journals'));
}

public function eresources()
{
    $eresources = EResource::paginate(12);
    return view('library.eresources', compact('eresources'));
}
public function booksByDivision()
{
    $divisions = Division::with(['subdivisions' => function ($query) {
        $query->withCount('books');
    }])->get();
    
    return view('library.books_circular', compact('divisions'));
}
}
