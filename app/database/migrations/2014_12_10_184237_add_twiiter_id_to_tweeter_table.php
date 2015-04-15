<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTwiiterIdToTweeterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tweeter', function(Blueprint $table)
		{
			$table->integer('twitter_id');
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
			$table->dropColumn('twitter_id');
		});
	}

}
