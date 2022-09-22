<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable =[
        'firstname',
        'lastname',
        'phone',
        'gender',
        'email',
        'pass',
        'repass',
    ];
}
