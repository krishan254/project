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
          $table->bigIncrements('id');
          $table->string('title')->nullable();
          $table->text('content')->nullable();
          $table->string('summary')->nullable();
          $table->integer('authorId')->nullable();
          $table->integer('commentStatus')->nullable();
          $table->integer('postPassword')->nullable();
          $table->integer('featuredImage')->nullable();
          $table->string('metaTitle')->nullable();
          $table->string('name')->nullable();
          $table->text('excerpt')->nullable();
          $table->integer('pingStatus')->nullable();
          $table->integer('featured')->nullable();
          $table->text('metaDescription')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
