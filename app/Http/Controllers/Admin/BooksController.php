<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Library;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $libraries = Library::all();
        return view('admin.books.create', compact('libraries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'publication_year' => 'nullable|integer',
            'genre' => 'nullable|string|max:255',
            'library_id' => 'required|exists:libraries,id',
            'subdivision_id' => 'nullable|integer',
            'type' => 'nullable|in:fiction,non-fiction,academic',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('image_url')) {
            $path = $request->file('image_url')->store('images/books', 'public');
            $validated['image_url'] = Storage::url($path);
        }

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $libraries = Library::all();
        return view('admin.books.edit', compact('book', 'libraries'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'publication_year' => 'nullable|integer',
            'genre' => 'nullable|string|max:255',
            'library_id' => 'required|exists:libraries,id',
            'subdivision_id' => 'nullable|integer',
            'type' => 'nullable|in:fiction,non-fiction,academic',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image update
        if ($request->hasFile('image_url')) {
            if ($book->image_url) {
                $oldImagePath = str_replace('/storage/', '', $book->image_url);
                Storage::disk('public')->delete($oldImagePath);
            }

            $path = $request->file('image_url')->store('images/books', 'public');
            $validated['image_url'] = Storage::url($path);
        }

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        if ($book->image_url) {
            $oldImagePath = str_replace('/storage/', '', $book->image_url);
            Storage::disk('public')->delete($oldImagePath);
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
