<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author', 'publisher')->orderBy('title')->paginate(10);

        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('name')->get();

        return view('admin.book.create', [
            'authors' => $authors,
            'publishers' => $publishers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'author_id' => ['required', 'exists:authors,id'],
            'publisher_id' => ['required', 'exists:publishers,id'],
            'isbn' => ['required', 'numeric', 'digits:13'],
            'description' => ['required'],
            'language' => ['required'],
            'page_number' => ['required', 'numeric']
        ]);

        $data['slug'] = Str::slug($request['title']);

        Book::create($data);

        return redirect(route('admin.books.index'))->with('success', 'Success add new book data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('name')->get();

        return view('admin.book.edit', [
            'book' => $book,
            'authors' => $authors,
            'publishers' => $publishers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => ['required'],
            'author_id' => ['required', 'exists:authors,id'],
            'publisher_id' => ['required', 'exists:publishers,id'],
            'isbn' => ['required', 'numeric', 'digits:13'],
            'description' => ['required'],
            'language' => ['required'],
            'page_number' => ['required', 'numeric']
        ]);

        $data['slug'] = Str::slug($request['title']);

        $book->update($data);

        return redirect(route('admin.books.index'))->with('success', 'Success update book data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect(route('admin.books.index'))->with('success', 'Success delete book data');
    }
}
