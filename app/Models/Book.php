<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'isbn', 'publication_year', 'genre', 'library_id'];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}
