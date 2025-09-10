<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return Book::with('library')->get();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'library_id' => 'required|exists:libraries,id',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books',
        ]);
        return Book::create($data);
    }

    public function show(Book $book) {
        return $book->load('library');
    }

    public function update(Request $request, Book $book) {
        $book->update($request->all());
        return $book;
    }

    public function destroy(Book $book) {
        $book->delete();
        return response()->noContent();
    }
}
