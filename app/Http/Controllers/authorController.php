<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class authorController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'description' => 'required|string',
        ]);
        if($Validator->fails()){
            return redirect()->back()->withErrors($Validator)->withInput();
        }
        $author = author::create(
            [
                'name' => $request->name,
                'birth_date' => $request->birth_date,
                'description' => $request->description,
            ]
        );
        return redirect()->route('authors.index')->with('success', 'author created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = author::find($id);
        if(!$author){
            return redirect()->back()->with('failed', 'author data not found');           
        }
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = author::find($id);
        if(!$author){
            return redirect()->back()->with('failed', 'author data not found');           
        }
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = author::find($id);
        if(!$author){
            return redirect()->back()->with('failed', 'author data not found');           
        }

        $Validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'description' => 'required|string',
        ]);
        if($Validator->fails()){
            return redirect()->back()->withErrors($Validator)->withInput();
        }
        $author->update(
            [
                'name' => $request->name,
                'birth_date' => $request->birth_date,
                'description' => $request->description,
            ]
        );
        return redirect()->route('authors.index')->with('success', 'author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = author::find($id);
        if(!$author){
            return redirect()->back()->with('failed', 'author data not found');           
        }

        $author->delete();
        return redirect()->route('authors.index')->with('success', 'author deleted successfully');
    }
}
