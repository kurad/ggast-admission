<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'dob', 'cell_id', 'user_id','mothername','malive','mlive_together','mphone','memail','mprofession','memployer','fathername','falive','flive_together','fphone','femail','fprofession','femployer','guardianname','glive_together','gphone','gemail'
    ];

    public function setDobDateAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }
}
