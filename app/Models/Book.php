<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



#[Fillable(['title', 'author', 'publication_year'])]
class Book extends Model
{
    use HasFactory;
    public function cover()
    {
        return $this->hasOne(Cover::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }



    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
