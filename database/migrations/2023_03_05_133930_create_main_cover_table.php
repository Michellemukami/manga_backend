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
        Schema::create('main_cover', function (Blueprint $table) {
            $table->id();
            $table->string('cover_file'); 
            $table->unsignedBigInteger('manga_id');
            $table->foreign('manga_id')->references('id')->on('mangas')
            ->onDelete('cascade');
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
        Schema::dropIfExists('main_cover');
    }
};
