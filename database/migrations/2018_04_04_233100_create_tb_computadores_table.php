<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbComputadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_computadores', function(Blueprint $table)
		{
			$table->integer('idComputador', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoComputador');
			$table->integer('computadorInoperante')->nullable();
			$table->string('nomeComputador', 45)->nullable();
			$table->string('ipv4', 45)->nullable();
			$table->integer('ipEstatico')->nullable();
			$table->string('usuarioMachine', 20)->nullable();
			$table->string('computadorDepartamento', 50)->nullable();
			$table->string('funcaoComputador', 10)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idComputador','codigoGrupo','codigoEmpresa','codigoComputador','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_computadores');
	}

}
