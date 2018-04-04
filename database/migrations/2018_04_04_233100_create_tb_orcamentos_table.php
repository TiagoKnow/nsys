<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOrcamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_orcamentos', function(Blueprint $table)
		{
			$table->integer('idOrcamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrcamento');
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataOrcamento')->nullable();
			$table->time('horaOrcamento')->nullable();
			$table->integer('statusOrcamento')->nullable();
			$table->string('observacao', 350)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrcamento','codigoGrupo','codigoEmpresa','codigoOrcamento','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_orcamentos');
	}

}
