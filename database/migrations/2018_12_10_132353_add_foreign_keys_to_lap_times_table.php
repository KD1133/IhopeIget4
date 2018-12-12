<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLapTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lap_times', function(Blueprint $table)
		{
			$table->foreign('car_id', 'car_id_time')->references('id')->on('cars')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('track_id', 'track_id_time')->references('id')->on('tracks')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_username', 'user_id_time')->references('username')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lap_times', function(Blueprint $table)
		{
			$table->dropForeign('car_id_time');
			$table->dropForeign('track_id_time');
			$table->dropForeign('user_id_time');
		});
	}

}
