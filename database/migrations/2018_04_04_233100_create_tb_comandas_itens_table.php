<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbComandasItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_comandas_itens', function(Blueprint $table)
		{
			$table->integer('idComandaItem', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoComanda');
			$table->integer('codigoComandaItem');
			$table->integer('codigoProduto')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->float('valorUnitario', 15)->nullable();
			$table->float('quantidade', 15)->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idComandaItem','codigoComanda','codigoComandaItem','codigoEmpresa','codigoGrupo','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_comandas_itens');
	}

}
