<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsuariosEmailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuarios_email', function(Blueprint $table)
		{
			$table->integer('idUsuarioEmail', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoUsuario');
			$table->string('servidorEmail', 60)->nullable();
			$table->integer('portaEmail')->nullable();
			$table->string('usuarioServidorEmail', 50)->nullable();
			$table->string('senhaServidorEmail', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->integer('autenticacaoSSL')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idUsuarioEmail','idEmpresa','codigoEmpresa','codigoGrupo','codigoUsuario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuarios_email');
	}

}
