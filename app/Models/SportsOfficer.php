<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsOfficer extends Model
{
    use HasFactory;
    protected $fillable = ['district', 'name', 'designation', 'contact_number'];
}
