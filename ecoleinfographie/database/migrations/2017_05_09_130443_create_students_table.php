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
            $table->string('slug', 191);
            $table->string('firstname', 191);
            $table->string('lastname', 191);
            $table->string('image', 191)->nullable();
            $table->string('profession', 191)->nullable();
            $table->integer('year')->nullable();
            $table->text('orientation', 1000);
            $table->boolean('is_graduated');
            $table->boolean('is_freelance');
            $table->string('company', 191)->nullable();
            $table->text('social', 5000)->nullable();
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
