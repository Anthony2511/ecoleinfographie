<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table){
            $table->increments('id');
            $table->string('title', 191);
            $table->string('slug', 191);
            $table->string('orientation', 191);
            $table->date('date');
            $table->text('introduction')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->enum('status', array('PUBLIÉ', 'BROUILLON'))->default('BROUILLON');
            $table->integer('category_id')->unsigned();
            $table->integer('author_id')->unsigned()->nullable();
            $table->integer('teacher_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
