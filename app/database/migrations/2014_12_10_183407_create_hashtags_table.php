<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHashtagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hashtags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('twitter_id');
			$table->string('hashtag');
			$table->integer('count');
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
		Schema::table('hashtags', function(Blueprint $table)
		{
			Schema::drop('hashtags');
		});
	}

}
