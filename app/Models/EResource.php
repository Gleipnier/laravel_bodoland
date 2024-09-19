<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EResource extends Model
{
    protected $fillable = ['title', 'type', 'url', 'access_information'];
}
