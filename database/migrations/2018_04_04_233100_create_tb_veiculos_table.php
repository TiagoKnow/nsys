<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVeiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_veiculos', function(Blueprint $table)
		{
			$table->integer('idVeiculo', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVeiculo');
			$table->string('placaVeiculo', 10)->nullable();
			$table->string('ufVeiculo', 2)->nullable();
			$table->string('cidadeVeiculo', 50)->nullable();
			$table->string('rntcVeiculo', 200)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idVeiculo','codigoGrupo','codigoEmpresa','codigoVeiculo','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_veiculos');
	}

}
