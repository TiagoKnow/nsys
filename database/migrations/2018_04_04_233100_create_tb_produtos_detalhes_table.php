<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbProdutosDetalhesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_produtos_detalhes', function(Blueprint $table)
		{
			$table->integer('idProdutoDetalhes', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoProduto');
			$table->decimal('valorDeCompra', 10)->nullable();
			$table->decimal('valorDeVenda', 10)->nullable();
			$table->integer('quantidadeMinima')->nullable();
			$table->integer('quantidadeIdeal')->nullable();
			$table->integer('quantidadeAtual')->nullable();
			$table->date('dataRegistro')->nullable();
			$table->time('horaRegistro')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idProdutoDetalhes','codigoGrupo','codigoEmpresa','idEmpresa','codigoProduto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_produtos_detalhes');
	}

}
