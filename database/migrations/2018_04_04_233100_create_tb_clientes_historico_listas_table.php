<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClientesHistoricoListasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_clientes_historico_listas', function(Blueprint $table)
		{
			$table->integer('idClienteHistorico', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoPredefenido');
			$table->string('descricaoPredefenida', 50)->nullable();
			$table->date('dataCadastro')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idClienteHistorico','codigoGrupo','codigoEmpresa','codigoPredefenido','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_clientes_historico_listas');
	}

}
