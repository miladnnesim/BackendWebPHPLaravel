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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('rank');
            $table->enum('type', ['competitive', 'casual']);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('duos');
    }
}
