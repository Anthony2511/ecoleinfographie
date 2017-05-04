<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('course_teacher', function(Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('teachers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('course_teacher', function(Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('course_teacher', function(Blueprint $table) {
			$table->dropForeign('course_teacher_teacher_id_foreign');
		});
		Schema::table('course_teacher', function(Blueprint $table) {
			$table->dropForeign('course_teacher_course_id_foreign');
		});
	}
}