<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public function book()
    {
        // This method defines a inverse one-to-one (or many) relationship
        return $this->belongsTo(Book::class);
        // You can specify what column is the foreign key in the second parameter
        // By default it takes default fk names, like book_id (id column of books table)
    }
}
