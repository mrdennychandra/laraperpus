<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'description',
    ];

    //one to many relationship to Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
