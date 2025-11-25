<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'description',
        'fasilitas',
    ];

    protected $casts = [
        'fasilitas' => 'array',
    ];
}
