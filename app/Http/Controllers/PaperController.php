<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
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
        return view('papers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'seminar_name' => 'required',
            'penyelenggara' => 'required',
            'date' => 'required',
            'file' => 'required|mimes:pdf|max:5048',
        ]);

        $filename = time().'.'.$request->file->extension();  
         
        $request->file->move(public_path('uploads'), $filename);

        $validated['file'] = $filename;

        Paper::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paper $paper)
    {
        // get another paper with the same author
        $sameAuthor = Paper::where('author', $paper->author)
        ->where('id', '!=', $paper->id)
        ->limit(5)
        ->get();
    
        $anotherPaper = Paper::where('id', '!=', $paper->id)
            ->limit(5)
            ->get();
    
            return view('papers.show', compact('paper', 'sameAuthor', 'anotherPaper'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function download(Paper $paper)
    {
        return response()->download(public_path("uploads/{$paper->file}"));
    }
}
