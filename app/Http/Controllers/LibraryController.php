<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() {
        return Library::with(['books','members'])->get();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);
        return Library::create($data);
    }

    public function show(Library $library) {
        return $library->load(['books','members']);
    }

    public function update(Request $request, Library $library) {
        $library->update($request->all());
        return $library;
    }

    public function destroy(Library $library) {
        $library->delete();
        return response()->noContent();
    }
}
