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
            $table->string('player'); 
            $table->string('rating');
            $table->string('wants_to_play'); 
            $table->string('language'); 
            $table->text('notes')->nullable(); 
            $table->timestamps(); 
        });
    }


    public function down()
    {
        Schema::dropIfExists('duos');
    }
}
