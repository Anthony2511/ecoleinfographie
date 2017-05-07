<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseTeacherTable extends Migration {

	public function up()
	{
		Schema::create('course_teacher', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('teacher_id')->unsigned();
			$table->integer('course_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('course_teacher');
	}
}