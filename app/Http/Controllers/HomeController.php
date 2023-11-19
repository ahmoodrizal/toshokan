<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBooks = Book::latest()->get();

        return view('welcome', [
            'latestBooks' => $latestBooks,
        ]);
    }

    public function detail(Book $book)
    {
        return view('detail-book', compact('book'));
    }
}
