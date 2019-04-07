<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100);
			$table->text('description');
			$table->string('logo', 200);
			$table->string('url', 200);
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}