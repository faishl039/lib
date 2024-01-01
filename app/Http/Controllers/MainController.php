<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Book;
use App\Models\Paper;
use App\Models\Prosiding;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        // Get the latest 5 books
        $popularBooks = Book::latest()->limit(5)->get();

        // Get the latest 5 articles, books, papers, and prosidings
        $articles = Article::latest()->limit(5);
        $books = Book::latest()->limit(5);
        $papers = Paper::latest()->limit(5);
        $prosidings = Prosiding::latest()->limit(5);

        // Filter models if search query is present
        if ($search) {
            $articles = $articles->where('title', 'LIKE', '%'.$search.'%')->get();
            $books = $books->where('title', 'LIKE', '%'.$search.'%')->get();
            $papers = $papers->where('title', 'LIKE', '%'.$search.'%')->get();
            $prosidings = $prosidings->where('title', 'LIKE', '%'.$search.'%')->get();
        } else {
            $articles = $articles->get();
            $books = $books->get();
            $papers = $papers->get();
            $prosidings = $prosidings->get();
        }

        // Return the view with the data
        return view('index', compact(
            'popularBooks', 'articles', 'books', 'papers', 'prosidings'));
    }
}
