<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweeterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tweeter', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id');
			$table->string('handle');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tweeter', function(Blueprint $table)
		{
			Schema::drop('tweeter');
		});
	}

}
