<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosvendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametrosvendas', function(Blueprint $table)
		{
			$table->integer('idParametrosVendas', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('infQtdMenor')->nullable();
			$table->float('valorDeMeta', 15)->nullable();
			$table->float('porcentagemDeComissao', 15, 4)->nullable();
			$table->string('pastaImpressaoAberturaCaixa', 75)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosVendas','idEmpresa','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametrosvendas');
	}

}
