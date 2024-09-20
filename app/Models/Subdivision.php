<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
