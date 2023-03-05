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
        Schema::create('manga_vols', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mangas_id')->unsigned();
            $table->unsignedBigInteger('vol_id')->unsigned();
            $table->foreign('mangas_id')->references('id')->on('mangas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vol_id')->references('id')->on('volume')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('manga_vols');
    }
};
