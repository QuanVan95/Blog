<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('sub_image')->nullable();
            $table->text('url')->nullable();
            $table->integer('category_id')->default(0);
            $table->integer('position')->default(0);
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('sections');
    }
}
