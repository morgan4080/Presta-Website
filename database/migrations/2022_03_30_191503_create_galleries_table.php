<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->unique();
            $table->unsignedBigInteger('album_id')->index()->unique();
            $table->text('thumbNail');
            $table->text('title');
            $table->text('description');
            $table->text('date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('album_id')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
