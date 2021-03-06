<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournaments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->double('pricepool');
            $table->string('slug');
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
		Schema::drop('tournaments');
	}

}
