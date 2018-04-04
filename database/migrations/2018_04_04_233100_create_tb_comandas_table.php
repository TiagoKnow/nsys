<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbComandasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_comandas', function(Blueprint $table)
		{
			$table->integer('idComanda', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoComanda');
			$table->string('codigoBarrasComanda', 100)->nullable();
			$table->integer('statusComanda')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idComanda','codigoGrupo','codigoEmpresa','codigoComanda','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_comandas');
	}

}
