<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45);
			$table->string('country', 45)->nullable();
			$table->string('regioin', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('street', 45)->nullable();
			$table->string('number', 45)->nullable();
			$table->string('phone', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('lenght')->nullable();
			$table->string('surface', 45)->nullable();
			$table->string('accesability', 1000);
			$table->string('track_map', 45)->default('aaa');
			$table->string('banner', 45)->default('aaa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tracks');
	}

}
