<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['name', 'subdivision_id'];

    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
