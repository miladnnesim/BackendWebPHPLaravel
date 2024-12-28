<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duo extends Model
{

    protected $fillable = [
        'user_id',  // De gebruiker die de duo-post maakt
        'rank',     // Rank van de gebruiker
        'type',     // Type duo (competitive/casual)
    ];

    /**
     * Relatie met de User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
