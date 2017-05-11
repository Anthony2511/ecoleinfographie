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
        Schema::table('skill_work', function(Blueprint $table) {
            $table->foreign('work_id')->references('id')->on('works')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
        Schema::table('skill_work', function(Blueprint $table) {
            $table->foreign('skill_id')->references('id')->on('skills')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
        Schema::table('student_work', function(Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
        Schema::table('student_work', function(Blueprint $table) {
            $table->foreign('work_id')->references('id')->on('works')
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
        Schema::table('skill_work', function(Blueprint $table) {
            $table->dropForeign('skill_work_work_id_foreign');
        });
        Schema::table('skill_work', function(Blueprint $table) {
            $table->dropForeign('skill_work_skill_id_foreign');
        });
        Schema::table('student_work', function(Blueprint $table) {
            $table->dropForeign('student_work_student_id_foreign');
        });
        Schema::table('student_work', function(Blueprint $table) {
            $table->dropForeign('student_work_work_id_foreign');
        });
	}
}
