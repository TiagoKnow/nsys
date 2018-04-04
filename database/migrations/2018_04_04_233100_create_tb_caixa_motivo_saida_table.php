<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCaixaMotivoSaidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_caixa_motivo_saida', function(Blueprint $table)
		{
			$table->integer('idMotivoSaida', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoMotivoSaida');
			$table->string('descricaoMotivoSaida', 75)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idMotivoSaida','codigoGrupo','codigoEmpresa','codigoMotivoSaida','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_caixa_motivo_saida');
	}

}
