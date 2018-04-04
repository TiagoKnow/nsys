<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_produtos', function(Blueprint $table)
		{
			$table->integer('idProdutos', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoProduto');
			$table->integer('produtoInativo')->nullable()->default(0);
			$table->integer('codigoFornecedor')->nullable()->default(1);
			$table->date('dataCadastro')->nullable();
			$table->string('descricaoProduto', 100)->nullable();
			$table->string('codigoDeBarras', 25)->nullable()->default('0');
			$table->date('dataDeVencimento')->nullable();
			$table->decimal('valorDeCompra', 10)->default(0.00);
			$table->decimal('valorDeVenda', 10)->default(0.00);
			$table->string('tipoDeProduto', 10)->nullable();
			$table->integer('codigoFabricante')->nullable()->default(1);
			$table->integer('codigoGrupoProduto');
			$table->integer('codigoSubGrupoProduto');
			$table->integer('quantidadeMinima')->nullable();
			$table->integer('quantidadeIdeal')->nullable();
			$table->integer('quantidadeAtual')->nullable();
			$table->string('observacoes', 200)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->binary('imagemProduto')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idProdutos','codigoGrupo','codigoEmpresa','codigoProduto','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_produtos');
	}

}
