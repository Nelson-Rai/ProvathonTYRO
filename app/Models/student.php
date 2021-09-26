<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'school_name',
        'class',
        'address',
        'phone',
        'user_id',
        'grade_id',
    ];



}
