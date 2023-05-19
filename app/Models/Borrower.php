<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrower extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'nic',
        'phone_number',
        'address',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
