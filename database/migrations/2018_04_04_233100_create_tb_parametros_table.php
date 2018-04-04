<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametros', function(Blueprint $table)
		{
			$table->integer('idParametros', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->string('pastaRelatorios', 100)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametros','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametros');
	}

}
