<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrimsTable extends Migration
{
    
    public function up()
{
    Schema::create('scrims', function (Blueprint $table) {
        $table->id();
        $table->string('type'); 
        $table->date('date');
        $table->time('start_time');
        $table->time('end_time');
        $table->integer('players_needed');
        $table->string('language');
        $table->string('min_rank');
        $table->string('max_rank');
        $table->text('notes')->nullable();
        $table->foreignId('organizer_id')->constrained('users')->onDelete('cascade'); 
        $table->timestamps();
    });
}


    
    public function down()
    {
        Schema::dropIfExists('scrims');
    }
}
