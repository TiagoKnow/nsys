<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbBoletosRetornoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_boletos_retorno', function(Blueprint $table)
		{
			$table->integer('idBoletoRetorno', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoBoleto')->nullable();
			$table->string('numeroDocumento', 10)->nullable();
			$table->date('dataProcessamento')->nullable();
			$table->time('horaProcessamento')->nullable();
			$table->date('dataDeVencimento')->nullable();
			$table->float('valorDevido', 15)->nullable();
			$table->date('dataDePagamento')->nullable();
			$table->float('valorPago', 15)->nullable();
			$table->integer('Ocorrencia')->nullable();
			$table->string('codigoBanco', 5)->nullable();
			$table->string('numeroDaCarteira', 3)->nullable();
			$table->integer('numeroAgencia')->unsigned()->nullable();
			$table->integer('numeroContaCorrente')->nullable();
			$table->integer('digitoVerificador')->nullable();
			$table->string('Observacoes', 150)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idBoletoRetorno','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_boletos_retorno');
	}

}
