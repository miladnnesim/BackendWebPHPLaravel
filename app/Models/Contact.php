<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function up()
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->text('message');
        $table->timestamps();
    });
}
    use HasFactory;

    protected $fillable = ['name', 'email', 'message'];
}
