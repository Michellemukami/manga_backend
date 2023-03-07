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
    {   Schema::enableForeignKeyConstraints();
        Schema::create('manga_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('mangas_id')->unsigned();
            $table->unsignedBigInteger('genre_id')->unsigned();
            $table->foreign('mangas_id')->references('id')->on('mangas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade')->onUpdate('cascade');   
            $table->timestamps();     
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
