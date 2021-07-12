<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'class',
        'address',
        'phone',
        'user_id',
        'grade_id',
    ];
}
