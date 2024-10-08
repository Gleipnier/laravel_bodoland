<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalIssue extends Model
{
    protected $fillable = ['journal_id', 'issue_number', 'publication_date'];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
