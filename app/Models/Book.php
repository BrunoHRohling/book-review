<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['review', 'rating'];

    public function reviews()
    {
        // This method defines a one-to-many relationship, 'the book can has many reviews'
        return $this->hasMany(Reviews::class);
        // You can specify what column is the foreign key in the second parameter
    }

    public function scopeTitle(Builder $query, string $title): Builder
    {
        // Ever time that use a method to specify a "where" search, use the "scope" prefix
        return $query->where('title', 'LIKE', '%' . $title . '%');
    }
}
