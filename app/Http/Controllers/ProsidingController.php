<?php

namespace App\Http\Controllers;

use App\Models\Prosiding;
use Illuminate\Http\Request;

class ProsidingController extends Controller
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
        return view('prosiding.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'seminar_name' => 'required|max:255',
            'penyelenggara' => 'required|max:255',
            'date' => 'required',
            'isbn' => 'required|max:255',
            'file' => 'required|mimes:pdf|max:5048',
        ]);

        $filename = time().'.'.$request->file->extension();  
         
        $request->file->move(public_path('uploads'), $filename);

        $validated['file'] = $filename;

        Prosiding::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prosiding $prosiding)
    {
        // get another prosiding with the same author
        $sameAuthor = Prosiding::where('author', $prosiding->author)
            ->where('id', '!=', $prosiding->id)
            ->limit(5)
            ->get();

        $anotherProsiding = Prosiding::where('id', '!=', $prosiding->id)
            ->limit(5)
            ->get();

        return view('prosiding.show', compact('prosiding', 'sameAuthor', 'anotherProsiding'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prosiding $prosiding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prosiding $prosiding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prosiding $prosiding)
    {
        //
    }

    public function download(Prosiding $prosiding)
    {
        return response()->download(public_path('uploads/'.$prosiding->file));
    }
}
