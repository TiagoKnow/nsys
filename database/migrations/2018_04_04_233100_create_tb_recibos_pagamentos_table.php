<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbRecibosPagamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_recibos_pagamentos', function(Blueprint $table)
		{
			$table->integer('idRecibosPagamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoRecibo');
			$table->integer('codigoPagamento');
			$table->float('valorDoPagamento', 15)->nullable();
			$table->float('trocoDoPagamento', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idRecibosPagamento','idEmpresa','codigoGrupo','codigoEmpresa','codigoRecibo','codigoPagamento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_recibos_pagamentos');
	}

}
