<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbParametrosccTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_parametroscc', function(Blueprint $table)
		{
			$table->integer('idParametrosCC', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->binary('imagemBoletos')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idParametrosCC','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_parametroscc');
	}

}
