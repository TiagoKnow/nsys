<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametroscontabilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametroscontabil', function(Blueprint $table)
		{
			$table->integer('idParametrosContabil');
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->date('dataContabil')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosContabil','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametroscontabil');
	}

}
