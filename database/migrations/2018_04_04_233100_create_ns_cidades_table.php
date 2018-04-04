<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsCidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_cidades', function(Blueprint $table)
		{
			$table->increments('codigoCidade');
			$table->integer('codigoEstado')->unsigned()->default(00);
			$table->string('uf', 4)->default('');
			$table->string('nome', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_cidades');
	}

}
