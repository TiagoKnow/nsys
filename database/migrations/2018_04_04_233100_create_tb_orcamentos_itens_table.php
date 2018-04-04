<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOrcamentosItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_orcamentos_itens', function(Blueprint $table)
		{
			$table->integer('idOrcamentoItem', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrcamento');
			$table->integer('codigoOrcamentoItem');
			$table->integer('codigoServicoProduto')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->integer('tipo')->nullable();
			$table->float('valorUnitario', 15)->nullable();
			$table->float('quantidade', 9, 3)->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrcamentoItem','idEmpresa','codigoOrcamento','codigoOrcamentoItem','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_orcamentos_itens');
	}

}
