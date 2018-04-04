<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbSituacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_situacoes', function(Blueprint $table)
		{
			$table->integer('idSituacao', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoSituacao');
			$table->string('descricaoSituacao', 35)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idSituacao','codigoGrupo','codigoEmpresa','codigoSituacao','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_situacoes');
	}

}
