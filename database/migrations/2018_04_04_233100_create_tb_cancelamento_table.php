<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCancelamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_cancelamento', function(Blueprint $table)
		{
			$table->integer('idCancelamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoCancelamento');
			$table->string('descricaoCancelamento', 30)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idCancelamento','codigoGrupo','codigoEmpresa','codigoCancelamento','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_cancelamento');
	}

}
