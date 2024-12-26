<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrim extends Model
{
    protected $fillable = [
        'type',
        'date',
        'start_time',
        'end_time',
        'players_needed',
        'language',
        'min_rank',
        'max_rank',
        'notes',
    ];

    public function participants()
    {
        return $this->belongsToMany(User::class, 'scrim_user', 'scrim_id', 'user_id');
    }
}
