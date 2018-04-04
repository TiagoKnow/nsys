<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOsPagamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_os_pagamentos', function(Blueprint $table)
		{
			$table->integer('idPagamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrdemServico');
			$table->integer('codigoPagamento');
			$table->float('valorDoPagamento', 15)->nullable();
			$table->float('trocoDoPagamento', 15)->nullable();
			$table->date('dataPagamento')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPagamento','idEmpresa','codigoOrdemServico','codigoPagamento','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_os_pagamentos');
	}

}
