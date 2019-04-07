<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepotsTable extends Migration {

	public function up()
	{
		Schema::create('depots', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->text('description');
			$table->string('url', 200);
		});
	}

	public function down()
	{
		Schema::drop('depots');
	}
}