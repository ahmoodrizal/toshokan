<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBooks = Book::latest()->take(6)->get();
        $popularBooks = Book::withCount('transactions')->orderBy('transactions_count', 'desc')->take(6)->get();

        return view('welcome', [
            'latestBooks' => $latestBooks,
            'popularBooks' => $popularBooks
        ]);
    }

    public function books(Request $request)
    {
        if (!$request->query('search')) {
            $books = Book::latest()->paginate(24);
        } else {
            $books = Book::where('title', 'like', '%' . $request['search'] . '%')->paginate(12);
        }


        return view('books', compact('books'));
    }

    public function detail(Book $book)
    {
        return view('detail-book', compact('book'));
    }
}
