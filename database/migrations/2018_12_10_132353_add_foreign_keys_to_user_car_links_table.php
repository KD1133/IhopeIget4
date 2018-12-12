<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserCarLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('car_user', function(Blueprint $table)
		{
			$table->foreign('car_id', 'car_id_link')->references('id')->on('cars')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_username', 'user_id_link')->references('username')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('car_user', function(Blueprint $table)
		{
			$table->dropForeign('car_id_link');
			$table->dropForeign('user_id_link');
		});
	}

}
