<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = ['title', 'issn', 'frequency', 'publisher'];

    public function issues()
    {
        return $this->hasMany(JournalIssue::class);
    }
}
