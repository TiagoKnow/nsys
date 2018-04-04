<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_vendas', function(Blueprint $table)
		{
			$table->integer('idVenda', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoVenda');
			$table->integer('codigoUsuario')->nullable();
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoComputador')->nullable();
			$table->date('dataVenda')->nullable();
			$table->time('horaVenda')->nullable();
			$table->integer('status')->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idVenda','codigoGrupo','codigoEmpresa','codigoVenda','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_vendas');
	}

}
