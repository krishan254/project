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
          $table->bigIncrements('postId');
          $table->string('title');
          $table->string('content');
          $table->string('summary');
          $table->string('postAuthor');
          $table->string('postExcerpt');
          $table->string('postState');
          $table->string('commentState');
          $table->string('pingStatus');
          $table->string('view');

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
