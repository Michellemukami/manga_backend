<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mangas_id');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('mangas_id')->references('id')->on('mangas')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('manga_genres');
    }
};
