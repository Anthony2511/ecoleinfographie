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
            $table->string('title', 191);
            $table->string('orientation', 191);
            $table->integer('year');
            $table->string('project_link', 191)->nullable();
            $table->string('view3d', 191)->nullable();
            $table->text('video', 512)->nullable();
            $table->string('cover', 191);
            $table->text('images')->nullable();
            $table->text('description');
            $table->text('other_description');
            $table->string('other_link', 191)->nullable();
            $table->integer('type_id')->unsigned();
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
