<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_category_id');
            $table->text('name');
            $table->char('slug', 200)->unique();
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['user_id', 'post_category_id']);

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('post_category_id')->references('id')->on('post_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_sub_categories');
    }
}
