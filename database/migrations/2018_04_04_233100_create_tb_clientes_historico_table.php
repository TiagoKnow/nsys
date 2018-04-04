<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClientesHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_clientes_historico', function(Blueprint $table)
		{
			$table->integer('idClienteHistorico', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoCliente');
			$table->integer('codigoHistorico');
			$table->integer('codigoUsuario')->nullable();
			$table->string('descricaoHistorico', 800)->nullable();
			$table->date('dataCadastro')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idClienteHistorico','codigoCliente','codigoHistorico','idEmpresa','codigoEmpresa','codigoGrupo']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_clientes_historico');
	}

}
