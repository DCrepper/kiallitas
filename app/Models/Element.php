<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'image_from_disc',
        'video_from_disc',
        'slide_length',
        'image_text',
        'possition',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
