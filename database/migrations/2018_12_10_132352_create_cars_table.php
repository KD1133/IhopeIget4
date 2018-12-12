<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('user_username')->index('user_id_idx');
            $table->string('name', 45);
			$table->string('vin', 45)->nullable();
			$table->string('licenseplate', 45)->nullable();
			$table->string('manufacturer', 45)->nullable();
			$table->string('model', 45)->nullable();
			$table->integer('year')->nullable();
			$table->integer('power')->nullable();
			$table->integer('torque')->nullable();
			$table->integer('weight')->nullable();
			$table->integer('displacement')->nullable();
			$table->string('drivetrain', 3)->nullable();
			$table->string('picture', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
