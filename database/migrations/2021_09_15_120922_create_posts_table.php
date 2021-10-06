<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_category_id');
            $table->unsignedBigInteger('post_sub_category_id');
            $table->text('title');
            $table->text('sub_title')->nullable();
            $table->char('slug', 200)->unique();
            $table->longText('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['user_id','post_category_id','post_sub_category_id']);

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('post_category_id')->references('id')->on('post_categories');

            $table->foreign('post_sub_category_id')->references('id')->on('post_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
