<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    // Vulbare velden (mass assignment)
    protected $fillable = ['category_id', 'question', 'answer'];

    // Relatie: een FAQ behoort tot één categorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
