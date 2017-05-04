<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug', 255);
			$table->string('lastname', 255);
			$table->string('firstname', 255);
			$table->string('fullname', 255);
			$table->string('role', 255);
			$table->text('description');
			$table->string('picture', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->text('social')->nullable();
			$table->enum('status', array('VISIBLE', 'INVISIBLE'));
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}
