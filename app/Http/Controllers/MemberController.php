<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        return Member::with('library')->get();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'library_id' => 'required|exists:libraries,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members',
        ]);
        return Member::create($data);
    }

    public function show(Member $member) {
        return $member->load('library');
    }

    public function update(Request $request, Member $member) {
        $member->update($request->all());
        return $member;
    }

    public function destroy(Member $member) {
        $member->delete();
        return response()->noContent();
    }
}
