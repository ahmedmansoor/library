<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'author',
        'publisher_name',
        'book_category',
        'isbn',
        'year',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
