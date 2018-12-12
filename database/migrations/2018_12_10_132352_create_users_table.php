<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

    public $incrementing = false;

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->string('username', 45)->primary();
			$table->string('password', 255);
            $table->string('remember_token')->nullable();
			$table->string('firstname', 45)->nullable();
			$table->string('lastname', 45)->nullable();
			$table->string('gender', 45)->nullable();
			$table->date('birth_day')->nullable();
			$table->string('avatar', 255)->default('aaa');
			$table->integer('power')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
