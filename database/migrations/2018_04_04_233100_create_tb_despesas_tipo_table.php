<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbDespesasTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_despesas_tipo', function(Blueprint $table)
		{
			$table->integer('idDespesaTipo', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoDespesaTipo');
			$table->string('descricaoDespesaTipo', 100);
			$table->integer('atualizado')->nullable();
			$table->primary(['idDespesaTipo','codigoGrupo','codigoEmpresa','codigoDespesaTipo','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_despesas_tipo');
	}

}
