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
    $recentBooks = Book::with('library')->latest()->take(5)->get();
    $recentJournals = Journal::latest()->take(5)->get();
    $recentEResources = EResource::latest()->take(5)->get();
    
    return view('library.bookhome', compact('recentBooks', 'recentJournals', 'recentEResources'));
}

public function books(Request $request)
    {
        $query = Book::query();

        // Apply filters
        if ($request->has('genre')) {
            $query->where('genre', $request->genre);
        }
        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        // Apply sorting
        $sortBy = $request->input('sort', 'popularity');
        switch ($sortBy) {
            case 'title':
                $query->orderBy('title');
                break;
            case 'author':
                $query->orderBy('author');
                break;
            case 'year':
                $query->orderBy('publication_year', 'desc');
                break;
            default:
                // For popularity, you might need to implement a custom sorting mechanism
                // This is just a placeholder using the 'id' field
                $query->orderBy('id', 'desc');
                break;
        }

        $books = $query->paginate(12);
        $genres = Book::distinct('genre')->pluck('genre');

        return view('library.books', compact('books', 'genres'));
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