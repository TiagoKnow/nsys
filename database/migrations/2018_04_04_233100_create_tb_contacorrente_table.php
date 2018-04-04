<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbContacorrenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_contacorrente', function(Blueprint $table)
		{
			$table->integer('idContaCorrente', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoContaCorrente');
			$table->integer('idBanco')->nullable();
			$table->integer('numeroAgencia')->nullable();
			$table->integer('digitoVerificadorAgencia')->nullable();
			$table->integer('numeroContaCorrente')->nullable();
			$table->integer('digitoVerificador')->nullable();
			$table->integer('contaCorrentePadrao')->nullable();
			$table->string('numeroDaCarteira', 10)->nullable();
			$table->string('especieDoDocumento', 3)->nullable();
			$table->string('AceiteOuNaoAceite', 1)->nullable();
			$table->string('descricao', 100)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idContaCorrente','codigoGrupo','codigoEmpresa','codigoContaCorrente','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_contacorrente');
	}

}
