<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
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
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'journal_name' => 'required|max:255',
            'journal_volume' => 'required|max:255',
            'journal_number' => 'required|max:255',
            'page' => 'required|max:255',
            'issn' => 'required|max:255',
            'publisher' => 'required|max:255',
            'doi' => 'max:255|nullable',
            'file' => 'required|mimes:pdf|max:5048',
       ]);

       $filename = time().'.'.$request->file->extension();  
         
       $request->file->move(public_path('uploads'), $filename);

       $validated['file'] = $filename;

       Article::create($validated);

       return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // get another article with the same author
        $sameAuthor = Article::where('author', $article->author)
            ->where('id', '!=', $article->id)
            ->limit(5)
            ->get();

        $anotherArticle = Article::where('id', '!=', $article->id)
            ->limit(5)
            ->get();

        return view('articles.show', compact('article', 'sameAuthor', 'anotherArticle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function download(Article $article)
    {
        return response()->download(public_path('uploads/'.$article->file));
    }
}
