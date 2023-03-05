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
        Schema::create('vol_cover', function (Blueprint $table) {
            $table->id();
            $table->string('vol_cover_file'); 
            $table->unsignedBigInteger('vol_id');
            $table->foreign('vol_id')->references('id')->on('volume')
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
        Schema::dropIfExists('vol_cover');
    }
};
