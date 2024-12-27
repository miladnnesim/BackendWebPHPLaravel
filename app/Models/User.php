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
        'role', // 'user' of 'admin'
        'username', // Optionele gebruikersnaam
        'riot_id', // Optionele Riot ID
        'birthday', // Geboortedatum
        'profile_photo', // Profielfoto
        'about_me', // Kleine "over mij" tekst
    ];

    /**
     * Controleer of de gebruiker een admin is.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    protected $hidden = [
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
