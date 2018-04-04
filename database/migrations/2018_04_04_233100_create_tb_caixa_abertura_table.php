<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCaixaAberturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_caixa_abertura', function(Blueprint $table)
		{
			$table->integer('idAbertura', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoAbertura');
			$table->integer('codigoComputador')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataAbertura')->nullable();
			$table->time('horaAbertura')->nullable();
			$table->float('valorDoCaixa', 15)->nullable();
			$table->string('status', 1)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idAbertura','codigoGrupo','codigoEmpresa','codigoAbertura','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_caixa_abertura');
	}

}
