<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoIsWho extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'designation', 'image_url', 'email', 'phone'];

}
