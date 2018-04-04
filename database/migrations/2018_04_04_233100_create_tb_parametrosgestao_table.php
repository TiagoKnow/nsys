<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosgestaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametrosgestao', function(Blueprint $table)
		{
			$table->integer('idParametrosGestao', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->date('dataGestao')->nullable();
			$table->integer('codigoContaCorrenteBoleto')->nullable();
			$table->integer('codigoContaCorrenteOrdemServico')->nullable();
			$table->integer('codigoContaCorrenteRecibo')->nullable();
			$table->integer('codigoContaCorrenteVenda')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosGestao','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametrosgestao');
	}

}
