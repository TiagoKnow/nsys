<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVendasItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_vendas_itens', function(Blueprint $table)
		{
			$table->integer('idVendaItem', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVenda');
			$table->integer('codigoVendaItem');
			$table->integer('codigoProduto')->nullable();
			$table->float('valorUnitario', 15)->nullable();
			$table->float('quantidade', 15)->nullable();
			$table->float('valorSubtotal', 15)->nullable();
			$table->integer('tipoDesconto')->nullable();
			$table->float('valorDesconto', 15)->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idVendaItem','codigoVenda','codigoEmpresa','codigoGrupo','idEmpresa','codigoVendaItem']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_vendas_itens');
	}

}
