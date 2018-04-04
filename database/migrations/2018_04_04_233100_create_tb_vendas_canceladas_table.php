<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVendasCanceladasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_vendas_canceladas', function(Blueprint $table)
		{
			$table->integer('idVendaCancelada', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVenda');
			$table->integer('codigoCancelamento')->nullable();
			$table->string('detalhesCancelamento', 300)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idVendaCancelada','idEmpresa','codigoVenda','codigoEmpresa','codigoGrupo']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_vendas_canceladas');
	}

}
