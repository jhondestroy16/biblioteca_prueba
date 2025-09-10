<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['library_id','title','author','isbn','available'];

    public function library() {
        return $this->belongsTo(Library::class);
    }
}
