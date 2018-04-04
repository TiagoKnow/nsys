<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPlanodecontasmovimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_planodecontasmovimentos', function(Blueprint $table)
		{
			$table->integer('idPlanoDeContasMovimentos', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->string('codigoPlanoDeContas', 11);
			$table->date('dataPlanoDeContas')->nullable();
			$table->float('saldo', 15)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPlanoDeContasMovimentos','codigoGrupo','codigoEmpresa','idEmpresa','codigoPlanoDeContas']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_planodecontasmovimentos');
	}

}
