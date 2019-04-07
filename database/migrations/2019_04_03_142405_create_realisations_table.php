<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRealisationsTable extends Migration {

	public function up()
	{
		Schema::create('realisations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 200);
			$table->text('description');
			$table->string('logo', 200);
			$table->string('url', 200);
			$table->string('role', 200);
		});
	}

	public function down()
	{
		Schema::drop('realisations');
	}
}
