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
        Schema::create('vol_chaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chap_id');
            $table->foreign('chap_id')->references('id')->on('chapters');
            $table->unsignedBigInteger('vol_id');
            $table->foreign('vol_id')->references('id')->on('volume');
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
        Schema::dropIfExists('vol_chaps');
    }
};
