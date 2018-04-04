<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_servicos', function(Blueprint $table)
		{
			$table->integer('idServico', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoServico');
			$table->string('descricaoServico', 50)->nullable();
			$table->float('valorServico', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idServico','codigoGrupo','codigoEmpresa','codigoServico','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_servicos');
	}

}
