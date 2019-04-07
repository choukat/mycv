<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetencesTable extends Migration {

	public function up()
	{
		Schema::create('competences', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 200);
			$table->text('description');
			$table->integer('level');
			$table->string('logo', 200);
		});
	}

	public function down()
	{
		Schema::drop('competences');
	}
}