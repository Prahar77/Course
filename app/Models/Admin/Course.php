<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =[
        'coursename',
        'price',
        'credit',
        'type',
        'duration',
        'shift',
        'requirement',
        'description',
    ];

}
