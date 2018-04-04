<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCaixaSaidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_caixa_saida', function(Blueprint $table)
		{
			$table->integer('idCaixaSaida', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoCaixaSaida');
			$table->integer('codigoComputador')->nullable();
			$table->integer('codigoAbertura')->nullable();
			$table->integer('codigoMotivoSaida')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataSaidaCaixa')->nullable();
			$table->time('horaSaidaCaixa')->nullable();
			$table->float('valorDeSaida', 15)->nullable();
			$table->string('detalhesMotivoSaida', 200)->nullable();
			$table->integer('statusSaida')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idCaixaSaida','codigoGrupo','codigoEmpresa','codigoCaixaSaida','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_caixa_saida');
	}

}
