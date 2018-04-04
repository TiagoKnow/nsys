<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsBancodadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_bancodados', function(Blueprint $table)
		{
			$table->integer('idBancoDados', true);
			$table->string('so', 10)->nullable();
			$table->integer('conexao')->nullable();
			$table->string('servidor', 50)->nullable();
			$table->integer('porta')->nullable();
			$table->string('nomeBanco', 15)->nullable();
			$table->string('usuario', 10)->nullable();
			$table->string('senha', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_bancodados');
	}

}
