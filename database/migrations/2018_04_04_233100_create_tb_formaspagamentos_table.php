<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFormaspagamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_formaspagamentos', function(Blueprint $table)
		{
			$table->integer('idPagamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoPagamento');
			$table->string('descricaoPagamento', 30);
			$table->integer('codigoContaCorrente')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPagamento','codigoGrupo','codigoEmpresa','codigoPagamento','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_formaspagamentos');
	}

}
