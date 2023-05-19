<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrow extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'borrower_id',
        'book_id',
        'issue_date',
        'due_date',
        'return_date',
        'is_late',
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function lateReturnFine()
    {
        return $this->hasOne(LateReturnFine::class);
    }
}
