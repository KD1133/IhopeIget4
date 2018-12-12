<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLapTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lap_times', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('user_username')->index('user_id_idx');
			$table->integer('car_id')->index('car_id_idx');
			$table->integer('track_id')->index('track_id_idx');
			$table->string('date', 45);
			$table->string('video_link', 70)->nullable();
			$table->integer('verified')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lap_times');
	}

}
