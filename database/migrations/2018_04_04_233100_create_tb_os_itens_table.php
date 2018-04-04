<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOsItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_os_itens', function(Blueprint $table)
		{
			$table->integer('idOrdemServicoItem', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrdemServico');
			$table->integer('codigoOrdemServicoItem');
			$table->integer('codigoServicoProduto')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->integer('tipo')->nullable();
			$table->float('valorUnitario', 15)->nullable();
			$table->float('quantidade', 9, 3)->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('codigoServico')->nullable();
			$table->integer('codigoProduto')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrdemServicoItem','idEmpresa','codigoOrdemServico','codigoOrdemServicoItem','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_os_itens');
	}

}
