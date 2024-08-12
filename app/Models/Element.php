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
        'image_from_url',
        'video_url',
        'possition',
        'is_active',
        'local'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'local' => 'boolean',
    ];
}
