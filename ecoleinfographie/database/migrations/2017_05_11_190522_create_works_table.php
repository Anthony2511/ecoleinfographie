<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title', 255);
            $table->string('orientation', 255);
            $table->integer('year');
            $table->string('project_link', 255)->nullable();
            $table->string('view3d', 512)->nullable();
            $table->string('video', 512);
            $table->string('cover', 255);
            $table->text('images')->nullable();
            $table->text('description');
            $table->text('other_description');
            $table->string('other_link', 255)->nullable();
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
        Schema::drop('works');
    }
}
