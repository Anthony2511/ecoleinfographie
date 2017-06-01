<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug', 191);
			$table->string('title', 191);
			$table->text('image', 512);
			$table->string('orientation', 191);
			$table->integer('duration');
			$table->integer('ects');
			$table->text('ratio');
			$table->text('evaluation');
			$table->integer('bloc');
			$table->string('quadrimester', 191);
			$table->string('shortdescription', 191);
			$table->text('description');
			$table->text('objectives');
            $table->text('links')->nullable();
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
