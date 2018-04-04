<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCaixaFechamentoDetalhesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_caixa_fechamento_detalhes', function(Blueprint $table)
		{
			$table->integer('idFechamentoDetalhes', true);
			$table->integer('idFechamento');
			$table->integer('codigoComputador')->nullable();
			$table->integer('codigoPagamento')->nullable();
			$table->date('dataPagamento')->nullable();
			$table->float('valorTotalDoFechamento', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idFechamentoDetalhes','idFechamento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_caixa_fechamento_detalhes');
	}

}
