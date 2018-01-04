<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('url')->nullable();
            $table->integer('position')->default(0);
            $table->integer('active')->default(1);
            $table->string('key_cate')->nullable();
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
        Schema::dropIfExists('section_categories');
    }
}
