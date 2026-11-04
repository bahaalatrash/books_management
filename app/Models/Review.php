<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable('book_id','reviewer_name','rating','comment')]
class Review extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
