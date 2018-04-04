<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCaixaFechamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_caixa_fechamento', function(Blueprint $table)
		{
			$table->integer('idFechamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoFechamento');
			$table->integer('codigoComputador')->nullable();
			$table->integer('codigoAbertura')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataDoFechamento')->nullable();
			$table->time('horaDoFechamento')->nullable();
			$table->string('tipoFechamento', 1)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idFechamento','codigoGrupo','codigoEmpresa','codigoFechamento','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_caixa_fechamento');
	}

}
