<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'publication_year',
        'genre',
        'type',
        'image_url',
        'library_id',
    ];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class);
    }
}
