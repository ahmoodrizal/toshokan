<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::withCount('books')->orderBy('name')->get();

        return view('admin.publisher.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string']
        ]);

        $data['slug'] = Str::slug($request['name']);

        Publisher::create($data);

        return redirect(route('admin.publishers.index'))->with('success', 'Success create new publisher');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.publisher.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $data = $request->validate([
            'name' => ['required', 'string']
        ]);

        $data['slug'] = Str::slug($request['name']);

        $publisher->update($data);

        return redirect(route('admin.publishers.index'))->with('success', 'Success update publisher data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect(route('admin.publishers.index'))->with('success', 'Success update publisher data');
    }
}
