<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duo extends Model
{
    // Vulbare velden (mass assignment)
    protected $fillable = [
        'player',
        'rating',
        'wants_to_play',
        'language',
        'notes',
    ];
}
