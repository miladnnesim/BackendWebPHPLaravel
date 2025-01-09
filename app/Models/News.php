<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = [
        'title',
        'image',
        'content',
        'publication_date',
    ];

    protected $casts = [
        'publication_date' => 'datetime', 
    ];
}
