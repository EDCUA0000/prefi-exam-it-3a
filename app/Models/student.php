<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'sex',
        'address',
        'year',
        'course',
        'section'
    ];
}
