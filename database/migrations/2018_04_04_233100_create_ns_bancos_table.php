<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsBancosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_bancos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nomebanco', 120);
			$table->string('codigobanco', 5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_bancos');
	}

}
