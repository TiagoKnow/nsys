<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbBoletosInstrucoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_boletos_instrucoes', function(Blueprint $table)
		{
			$table->integer('idBoletoInstrucao', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoBoletoInstrucao');
			$table->string('descricaoInstrucao', 80)->nullable();
			$table->string('primeiraInstrucao', 80)->nullable();
			$table->string('segundaInstrucao', 80)->nullable();
			$table->string('terceiraInstrucao', 80)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idBoletoInstrucao','codigoGrupo','codigoEmpresa','codigoBoletoInstrucao','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_boletos_instrucoes');
	}

}
