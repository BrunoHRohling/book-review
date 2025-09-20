<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function reviews()
    {
        // This method defines a one-to-many relationship, 'the book can has many reviews'
        return $this->hasMany(Reviews::class);
        // You can specify what column is the foreign key in the second parameter
    }
}
