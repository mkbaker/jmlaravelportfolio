<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworkTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artwork_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('artwork_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('artwork_id')
                ->references('id')->on('artwork')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tag')
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
        Schema::dropIfExists('artwork_tag');
    }
}
