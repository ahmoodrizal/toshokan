<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author', 'publisher', 'categories')->orderBy('title')->paginate(10);

        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('admin.book.create', [
            'authors' => $authors,
            'publishers' => $publishers,
            'categories' => $categories
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
            'page_number' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'cover' => ['required', 'mimes:jpg,png,jpeg', 'image']
        ]);

        $data['slug'] = Str::slug($request['title']);

        if ($request->hasFile('cover')) {
            // upload image
            $image = $request->file('cover');
            $image->storeAs('public/books', $image->hashName());
            $data['cover'] = $image->hashName();
        }

        $book = Book::create($data);
        $book->categories()->sync($request['category']);

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
        $categories = Category::orderBy('name')->get();

        return view('admin.book.edit', [
            'book' => $book,
            'authors' => $authors,
            'publishers' => $publishers,
            'categories' => $categories
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
            'page_number' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'cover' => ['nullable', 'mimes:jpg,png,jpeg', 'image']
        ]);

        $data['slug'] = Str::slug($request['title']);

        if ($request->hasFile('cover')) {
            // upload image
            $image = $request->file('cover');
            $image->storeAs('public/books', $image->hashName());
            // delete old image
            Storage::delete('public/books/' . $book->cover);
            $data['cover'] = $image->hashName();
        }

        if ($request['category']) {
            $book->categories()->sync($request['category']);
        }

        $book->update($data);

        return back()->with('success', 'Success update book data');
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
