<?php
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;

Route::apiResource('libraries', LibraryController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('members', MemberController::class);
