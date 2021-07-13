<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'class_Name',
        'faculty',
        'year',
        'subject',
        'start_from',
    ];
}
