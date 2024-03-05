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
        Schema::table('plays', function (Blueprint $table) {
           $table->unsignedBigInteger("game_id") ;
           $table->foreign("game_id")->references("id")->on("games");
           //$table->foreignId('game_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plays', function (Blueprint $table) {
            //
        });
    }
};
