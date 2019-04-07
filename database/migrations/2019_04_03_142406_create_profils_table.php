<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilsTable extends Migration {

	public function up()
	{
		Schema::create('profils', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 40);
			$table->string('surname', 40);
			$table->text('description1');
			$table->text('description2');
			$table->text('description3');
			$table->text('description4');
			$table->date('birthdate');
			$table->string('email', 100);
			$table->string('title', 100);
			$table->string('tags', 300);
			$table->string('phone', 20);
			$table->string('address', 200);
		});
	}

	public function down()
	{
		Schema::drop('profils');
	}
}
