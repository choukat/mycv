<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperiencesTable extends Migration {

	public function up()
	{
		Schema::create('experiences', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 200);
			$table->text('description');
			$table->string('logo', 100);
			$table->date('begin');
			$table->date('end');
		});
	}

	public function down()
	{
		Schema::drop('experiences');
	}
}