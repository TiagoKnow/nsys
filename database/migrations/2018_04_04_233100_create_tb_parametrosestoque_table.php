<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosestoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametrosestoque', function(Blueprint $table)
		{
			$table->integer('idParametrosEstoque', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('infFaltaEstoqueOuAbaixLim')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosEstoque','idEmpresa','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametrosestoque');
	}

}
