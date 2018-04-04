<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsModulosAcessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_modulos_acesso', function(Blueprint $table)
		{
			$table->integer('idModuloAcesso', true);
			$table->integer('codigoGrupo')->nullable();
			$table->string('modulosAcesso', 14)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_modulos_acesso');
	}

}
