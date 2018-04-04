<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosproducaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametrosproducao', function(Blueprint $table)
		{
			$table->integer('idParametrosProducao', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->date('dataProducao')->nullable();
			$table->integer('impressaoDoLaudo')->nullable();
			$table->string('termoDeRecebimento', 1000)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosProducao','codigoEmpresa','codigoGrupo','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametrosproducao');
	}

}
