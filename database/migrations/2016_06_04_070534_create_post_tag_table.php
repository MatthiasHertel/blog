<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_tag', function (Blueprint $table) {
          $table->increments('id');
          // foreign key id number post
          $table->integer('post_id')->unsigned();
          $table->foreign('post_id')->references('id')->on('posts');
          // foreign key id number tag
          $table->integer('tag_id')->unsigned();
          $table->foreign('tag_id')->references('id')->on('tags');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_tag');
    }
}
