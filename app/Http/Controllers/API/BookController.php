<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latestBooks()
    {
        $books = Book::with('author:id,name', 'publisher:id,name', 'categories:id,name')
            ->latest()
            ->limit(6)
            ->get();

        if (count($books) > 0) {
            return response()->json([
                'message' => 'Fetch all latest books success',
                'data' => $books,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Books Data Not Found',
                'data' => [],
            ], 404);
        }
    }

    public function popularBooks()
    {
        $books = Book::with('author:id,name', 'publisher:id,name', 'categories:id,name')
            ->withCount('transactions')
            ->orderBy('transactions_count', 'desc')
            ->limit(6)
            ->get();

        if (count($books) > 0) {
            return response()->json([
                'message' => 'Fetch all popular books success',
                'data' => $books->makehidden('transactions_count'),
            ], 200);
        } else {
            return response()->json([
                'message' => 'Books Data Not Found',
                'data' => [],
            ], 404);
        }
    }

    public function searchByTitle($title)
    {
        $books = Book::with('author:id,name', 'publisher:id,name', 'categories:id,name')
            ->where('title', 'like', '%' . $title . '%')
            ->orderBy('title')
            ->get();

        if (count($books) > 0) {
            return response()->json([
                'message' => 'Fetch all books success',
                'data' => $books,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Books Data Not Found',
                'data' => [],
            ], 404);
        }
    }
}
