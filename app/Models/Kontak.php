<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'service_hours',
        'phone',
        'whatsapp',
        'email',
        'map_embed_url',
    ];
}
