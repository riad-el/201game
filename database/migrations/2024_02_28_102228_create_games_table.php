<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->integer("rand");//24
            $table->integer("nb1")->nullable();//12 UP
            $table->integer("nb2")->nullable();//30 DOWN
            $table->integer("nb3")->nullable();//24 BRAVOO
            $table->integer("nb4")->nullable();
            $table->integer("nb5");
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
