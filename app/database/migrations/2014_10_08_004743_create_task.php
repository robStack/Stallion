<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTask extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 150);
			$table->string('description');
			$table->integer('id_project');
			$table->integer('id_user');
			$table->string('state', 20);
			$table->string('priority', 30);
			//$table->foreign('id_project')->references('id')->on('project');
			//$table->foreign('id_user')->references('id')->on('users');
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
		Schema::drop('task');
	}

}
