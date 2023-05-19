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

    protected $casts = [
        'issue_date' => 'datetime',
        'due_date' => 'datetime',
        'return_date' => 'datetime',
    ];

    // Check if the book is late when getting the attribute
    public function getIsLateAttribute($value)
    {
        if ($this->return_date) {
            // If the book has been returned, check if it was returned after the due date
            return $this->return_date->greaterThan($this->due_date);
        } else {
            // If the book hasn't been returned, check if the current date is after the due date
            return now()->greaterThan($this->due_date);
        }
    }

    // Ensure is_late is always null when setting it, because we always calculate it when getting it
    public function setIsLateAttribute($value)
    {
        $this->attributes['is_late'] = null;
    }

    // get due date in days and months
    public function getDueInDaysAttribute()
    {
        $diff = now()->diff($this->due_date);

        if ($diff->days > 30) {
            return $diff->format('%m months %d days');
        } else {
            return $diff->days . ' days';
        }
    }

    public function late_return_fine()
    {
        return $this->hasOne(LateReturnFine::class, 'borrow_id');
    }

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
