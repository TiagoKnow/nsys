<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbMovimentacaobancariaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_movimentacaobancaria', function(Blueprint $table)
		{
			$table->integer('idMovimentacaoBancaria', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoUsuario');
			$table->integer('idTabela')->nullable();
			$table->integer('codigoTabela')->nullable();
			$table->string('modulo', 25)->nullable();
			$table->string('descricaoTabela', 75)->nullable();
			$table->date('dataFinalizouOuPagamento')->nullable();
			$table->string('descricaoTipo', 80)->nullable();
			$table->string('descricaoTipoTransferencia', 10)->nullable();
			$table->string('nomeBancoOrigem', 35)->nullable();
			$table->string('agenciaOrigem', 35)->nullable();
			$table->string('nomeBancoDestino', 35)->nullable();
			$table->string('agenciaDestino', 35)->nullable();
			$table->float('valorEntrada', 15)->nullable();
			$table->float('valorSaida', 15)->nullable();
			$table->float('valorTotalSaldo', 15)->nullable();
			$table->primary(['idMovimentacaoBancaria','idEmpresa','codigoGrupo','codigoEmpresa','codigoUsuario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_movimentacaobancaria');
	}

}
