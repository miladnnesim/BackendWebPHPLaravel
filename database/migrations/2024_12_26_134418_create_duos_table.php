<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuosTable extends Migration
{

    public function up()
    {
        Schema::create('duos', function (Blueprint $table) {
            $table->id();
            $table->string('player'); // Spelernaam of ID (bijv. gamertag)
            $table->string('rating'); // Ranksysteem (bijv. Diamond, Gold)
            $table->string('wants_to_play'); // Soort spel: competitive, casual, etc.
            $table->string('language'); // Taalvoorkeur: nl, fr, en, etc.
            $table->text('notes')->nullable(); // Optionele opmerkingen of voorkeuren
            $table->timestamps(); // Created_at en updated_at
        });
    }


    public function down()
    {
        Schema::dropIfExists('duos');
    }
}
