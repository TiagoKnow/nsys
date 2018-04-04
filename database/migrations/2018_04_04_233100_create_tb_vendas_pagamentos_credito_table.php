<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVendasPagamentosCreditoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_vendas_pagamentos_credito', function(Blueprint $table)
		{
			$table->integer('idPagamentoCredito', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVenda');
			$table->integer('codigoPagamento');
			$table->float('valorTotalDoPagamento', 15)->nullable();
			$table->integer('qtdParcelas')->nullable();
			$table->float('valorDasParcelas', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPagamentoCredito','idEmpresa','codigoGrupo','codigoEmpresa','codigoPagamento','codigoVenda']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_vendas_pagamentos_credito');
	}

}
