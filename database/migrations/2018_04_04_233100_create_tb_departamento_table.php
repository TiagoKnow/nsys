<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbDepartamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_departamento', function(Blueprint $table)
		{
			$table->integer('idDepartamento', true);
			$table->integer('idEmpresa')->default(1);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoDepartamento');
			$table->string('descricaoDepartamento', 50);
			$table->integer('atualizado')->nullable();
			$table->primary(['idDepartamento','codigoGrupo','codigoEmpresa','codigoDepartamento','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_departamento');
	}

}
