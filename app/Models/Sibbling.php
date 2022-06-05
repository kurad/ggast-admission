<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibbling extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'sex', 'dob', 'school_attended', 'sibbling_at_gashora','fees',
    ];
}
