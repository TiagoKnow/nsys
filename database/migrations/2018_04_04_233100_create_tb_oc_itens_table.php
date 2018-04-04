<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOcItensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_oc_itens', function(Blueprint $table)
		{
			$table->integer('idOrdemCompraItem', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrdemCompra');
			$table->integer('codigoOrdemCompraItem');
			$table->integer('codigoUsuario')->nullable();
			$table->integer('codigoProduto')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->float('valorUnitario', 15)->nullable();
			$table->float('quantidade', 15)->nullable();
			$table->float('valorSubtotal', 15)->nullable();
			$table->integer('tipoDesconto')->nullable();
			$table->float('valorDesconto', 15, 4)->nullable();
			$table->float('valorTotal', 15)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrdemCompraItem','idEmpresa','codigoOrdemCompra','codigoOrdemCompraItem','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_oc_itens');
	}

}
