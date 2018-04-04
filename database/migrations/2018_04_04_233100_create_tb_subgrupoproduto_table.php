<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbSubgrupoprodutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_subgrupoproduto', function(Blueprint $table)
		{
			$table->integer('idSubGrupoProduto', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoGrupoProduto');
			$table->integer('codigoSubGrupoProduto')->nullable();
			$table->string('descricaoSubGrupo', 50)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idSubGrupoProduto','codigoGrupoProduto','idEmpresa','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_subgrupoproduto');
	}

}
