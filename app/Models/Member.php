<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['library_id','name','email','membership_date'];

    public function library() {
        return $this->belongsTo(Library::class);
    }
}
