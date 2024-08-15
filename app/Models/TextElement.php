<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextElement extends Model
{
    use HasFactory;

   protected $fillable = [
        'text',
        'possition',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'possition' => 'integer',
    ];
}
