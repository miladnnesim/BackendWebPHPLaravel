<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrimUserTable extends Migration
{
    public function up()
    {
        Schema::create('scrim_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scrim_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scrim_user');
    }
}