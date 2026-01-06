<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($Validator->fails()){
            return redirect()->back()->withErrors($Validator)->withInput();
        }
        
        $data = [
            'title' => $request->title,
            'author_id' => $request->author_id,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('books', 'public');
        }

        $book = Book::create($data);
        return redirect()->route('books.index')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        if(!$book){
            return redirect()->back()->with('failed', 'Book data not found');           
        }
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        if(!$book){
            return redirect()->back()->with('failed', 'Book data not found');           
        }
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        if(!$book){
            return redirect()->back()->with('failed', 'Book data not found');           
        }

        $Validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($Validator->fails()){
            return redirect()->back()->withErrors($Validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'author_id' => $request->author_id,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($book->image && Storage::disk('public')->exists($book->image)) {
                Storage::disk('public')->delete($book->image);
            }
            $data['image'] = $request->file('image')->store('books', 'public');
        }

        $book->update($data);
        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        if(!$book){
            return redirect()->back()->with('failed', 'Book data not found');           
        }

        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
