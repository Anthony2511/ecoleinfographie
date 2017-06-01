<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title', 191);
            $table->date('date');
            $table->text('content');
            $table->string('image', 191);
            $table->enum('status', array('BROUILLON', 'PUBLIÉ'))->default('BROUILLON');
            $table->boolean('featured')->default(false);
            $table->string('metadescription', 191);
            $this->text('keywords', 1000);
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
        Schema::drop('news');
    }
}
