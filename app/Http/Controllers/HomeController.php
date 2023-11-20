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

    public function detail(Book $book)
    {
        return view('detail-book', compact('book'));
    }
}
