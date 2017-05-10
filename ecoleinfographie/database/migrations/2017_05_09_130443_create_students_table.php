<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('slug', 255);
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('image', 255)->nullable();
            $table->string('profession', 255)->nullable();
            $table->integer('year')->nullable();
            $table->string('orientation', 1000);
            $table->boolean('is_graduated');
            $table->boolean('is_freelance');
            $table->string('company', 255)->nullable();
            $table->string('social', 5000)->nullable();
            $table->boolean('has_interview');
            $table->text('interview')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Students');
    }
}
