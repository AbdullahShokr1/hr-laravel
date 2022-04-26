<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'nid',
        'name',
        'email',
        'phone',
        'job',
        'skills',
        'cv',
    ];
}
