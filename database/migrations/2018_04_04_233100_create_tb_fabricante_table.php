<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFabricanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_fabricante', function(Blueprint $table)
		{
			$table->integer('idFabricante', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoFabricante');
			$table->string('nomeFabricante', 50)->nullable();
			$table->string('siteFabricante', 35)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idFabricante','codigoGrupo','codigoEmpresa','codigoFabricante','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_fabricante');
	}

}
