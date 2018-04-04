<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVendasPagamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_vendas_pagamentos', function(Blueprint $table)
		{
			$table->integer('idPagamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVenda');
			$table->integer('codigoPagamento');
			$table->float('valorDoPagamento', 15)->nullable();
			$table->float('trocoDoPagamento', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPagamento','codigoVenda','codigoEmpresa','codigoGrupo','idEmpresa','codigoPagamento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_vendas_pagamentos');
	}

}
