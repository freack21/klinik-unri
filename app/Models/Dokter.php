<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialization',
        'image',
        'patients',
        'experience',
        'education',
        'languages',
        'skills',
        'schedule',
    ];

    protected $casts = [
        'skills' => 'array',
        'schedule' => 'array',
    ];
}
