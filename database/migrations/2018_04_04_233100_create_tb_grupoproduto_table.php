<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbGrupoprodutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_grupoproduto', function(Blueprint $table)
		{
			$table->integer('idGrupoProduto', true);
			$table->integer('idEmpresa')->default(1);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoGrupoProduto');
			$table->string('descricaoGrupo', 45)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idGrupoProduto','codigoGrupo','codigoEmpresa','idEmpresa','codigoGrupoProduto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_grupoproduto');
	}

}
