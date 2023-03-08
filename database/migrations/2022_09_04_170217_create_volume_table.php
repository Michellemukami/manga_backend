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
        Schema::create('volume', function (Blueprint $table) {
            $table->id();
            $table->string('vol_name');  
            $table->timestamps();
            $table->unsignedBigInteger('chap_id');
            $table->foreign('chap_id')->references('id')->on('chapters')
            ->onDelete('cascade');
            $table->unsignedBigInteger('manga_id');
            $table->foreign('manga_id')->references('id')->on('mangas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volume');
    }
};
