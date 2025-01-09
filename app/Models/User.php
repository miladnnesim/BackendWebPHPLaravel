<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', 
        'username', 
        'riot_id', 
        'birthday', 
        'profile_photo', 
        'about_me', 
    ];

    /**
     * Controleer of de gebruiker een admin is.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function organizedScrims()
{
    return $this->hasMany(Scrim::class, 'organizer_id');
}


    protected $hidden = [
        'birthday' => 'date',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scrims()
    {
        return $this->belongsToMany(Scrim::class, 'scrim_user', 'user_id', 'scrim_id');
    }
}
