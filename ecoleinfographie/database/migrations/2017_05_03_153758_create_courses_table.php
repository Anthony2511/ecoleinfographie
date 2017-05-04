<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug', 255);
			$table->string('title', 255);
			$table->string('orientation', 255);
			$table->integer('duration');
			$table->integer('ects');
			$table->text('ratio');
			$table->text('evaluation');
			$table->integer('bloc');
			$table->string('quadrimester', 255);
			$table->string('shortdescription', 255);
			$table->text('description');
			$table->text('objectives');
            $table->text('extras')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}
