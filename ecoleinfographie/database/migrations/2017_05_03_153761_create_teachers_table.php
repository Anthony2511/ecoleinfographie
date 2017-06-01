<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug', 191);
			$table->string('lastname', 191);
			$table->string('firstname', 191);
			$table->string('role', 191);
			$table->text('description');
			$table->string('picture', 191);
			$table->string('email', 191)->nullable();
			$table->text('social')->nullable();
			$table->text('status', 1000);
            $table->text('extras')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}
