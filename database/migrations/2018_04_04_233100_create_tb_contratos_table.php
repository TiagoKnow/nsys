<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_contratos', function(Blueprint $table)
		{
			$table->integer('idContrato', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoContrato');
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->float('valorContrato', 15)->nullable();
			$table->date('dataCadastro')->nullable();
			$table->date('dataContrato')->nullable();
			$table->date('dataVencimento')->nullable();
			$table->date('dataReajuste')->nullable();
			$table->string('descricaoContrato', 500)->nullable();
			$table->integer('statusContrato')->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idContrato','codigoGrupo','codigoEmpresa','codigoContrato','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_contratos');
	}

}
