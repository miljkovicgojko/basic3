<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users', function($table)
            {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('first_name',32);
                $table->string('last_name',32);
                $table->string('password',64);
		$table->string('remember_token', 64);
                $table->string('active',5);
                $table->string('language', 32);
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
            Schema::drop('users');
	}

}
