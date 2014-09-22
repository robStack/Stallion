<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_profile', function(Blueprint $table)
		{
			$table->string('fullname',100);
			$table->string('website');
			$table->string('about');
			$table->integer('id')->unsigned();
			$table->foreign('id')->references('id')->on('users');
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
		Schema::drop('users_profile');
	}

}
