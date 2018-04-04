<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbLogacessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_logacesso', function(Blueprint $table)
		{
			$table->integer('idLogAcesso', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoLogAcesso');
			$table->integer('codigoUsuario')->index('idUsuario_idx');
			$table->string('ip', 45)->nullable();
			$table->string('terminal', 45)->nullable();
			$table->date('data')->nullable();
			$table->time('horaEntrada')->nullable();
			$table->time('horaSaida')->nullable();
			$table->string('sistema', 45)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idLogAcesso','idEmpresa','codigoGrupo','codigoEmpresa','codigoUsuario','codigoLogAcesso']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_logacesso');
	}

}
