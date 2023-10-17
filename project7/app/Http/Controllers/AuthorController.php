<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }
    public function show(Author $author){
        return view('authors.show', compact('authors'));
    }
    public function destroy(Author $author){
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deteted successfully');
    }
    
}
