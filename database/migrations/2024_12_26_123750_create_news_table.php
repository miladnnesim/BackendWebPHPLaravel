<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titel van het nieuwsitem
            $table->string('image'); // Pad naar de afbeelding
            $table->text('content'); // Inhoud van het nieuwsitem
            $table->timestamp('publication_date'); // Datum en tijd van publicatie
            $table->timestamps(); // Created_at en updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
