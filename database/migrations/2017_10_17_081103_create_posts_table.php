<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('name')->nullable();
            $table->integer('view')->default(0);
            $table->integer('order')->default(0);
            $table->text('description')->nullable();
            $table->integer('category_id')->default(0);
            $table->text('url')->nullable();
            $table->text('image')->nullable();
            $table->text('gallery')->nullable();
            $table->timestamp('post_date');
            $table->text('summary')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('sub_name')->nullable();
            $table->integer('position')->default(1);
            $table->integer('active')->default(0);
            $table->integer('show')->default(0);
            $table->integer('deleted')->default(0);
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
