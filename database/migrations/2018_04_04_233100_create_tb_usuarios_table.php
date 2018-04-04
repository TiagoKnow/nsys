<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_usuarios', function(Blueprint $table)
		{
			$table->integer('idUsuario', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoUsuario');
			$table->date('dataCriacao');
			$table->string('nome', 50)->nullable();
			$table->string('usuario', 30)->nullable();
			$table->string('senha', 50)->nullable();
			$table->string('telefone', 12)->nullable();
			$table->integer('codigoDepartamento')->nullable();
			$table->integer('nivelUsuario')->nullable();
			$table->integer('podeMudarEmpresa')->nullable()->default(0);
			$table->string('observacoes', 300)->nullable();
			$table->string('nomeConexao', 100)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->binary('imagemUsuario')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idUsuario','codigoGrupo','codigoEmpresa','codigoUsuario','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_usuarios');
	}

}
