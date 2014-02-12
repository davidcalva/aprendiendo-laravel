<?php

use Illuminate\Database\Migrations\Migration;

class CreatePasswordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passwords', function($table)
		{
		    //$table->engine = 'InnoDB';
		    $table->integer('usuario_id')->nullable()->unsigned();
		    $table->string('password');
		    $table->index('usuario_id');
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
		//
	}

}