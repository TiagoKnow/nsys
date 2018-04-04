<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbRecibosDetalhesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_recibos_detalhes', function(Blueprint $table)
		{
			$table->integer('idReciboDetalhes', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoRecibo');
			$table->integer('codigoReciboItem');
			$table->integer('codigoServico')->nullable();
			$table->float('valorServico', 15)->nullable();
			$table->integer('quantidade')->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idReciboDetalhes','codigoRecibo','codigoEmpresa','codigoGrupo','idEmpresa','codigoReciboItem']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_recibos_detalhes');
	}

}
