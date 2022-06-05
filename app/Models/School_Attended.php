<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Attended extends Model
{
    use HasFactory;

    protected $fillable = [
        'from', 'to', 'schoolname', 'school_principal', 'principal_phone','fees',
    ];


    public function setFromDateAttribute($value)
    {
        $this->attributes['from'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }

     public function setToDateAttribute($value)
    {
        $this->attributes['to'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }
}
