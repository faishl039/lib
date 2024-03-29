<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'isbn' => 'required',
            'publisher' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'total_pages' => 'required',
            'publisher' => 'required',
            'file' => 'required|mimes:pdf|max:5048',
        ]);

        $filename = time().'.'.$request->file->extension();  
        $covername = time().'.'.$request->cover_image->extension();
         
        $request->file->move(public_path('uploads'), $filename);
        $request->cover_image->move(public_path('uploads'), $covername);

        $validated['file'] = $filename;
        $validated['cover_image'] = $covername;

        Book::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // get another book with the same author
        $sameAuthor = Book::where('author', $book->author)
        ->where('id', '!=', $book->id)
        ->limit(5)
        ->get();

        $anotherBook = Book::where('id', '!=', $book->id)
            ->limit(5)
            ->get();
    
        return view('books.show', compact('book', 'sameAuthor', 'anotherBook'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    public function download(Book $book)
    {
        return response()->download(public_path('uploads/'.$book->file));
    }
}
