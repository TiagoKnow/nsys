<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPlanodecontasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_planodecontas', function(Blueprint $table)
		{
			$table->integer('idPlanoDeContas', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->string('codigoPlanoDeContas', 11)->default('0');
			$table->string('descricaoPlanoDeContas', 60)->nullable();
			$table->string('tipoPlanoDeContas', 1)->nullable();
			$table->float('saldoDeAbertura', 15)->nullable();
			$table->string('codigoPlanoDeContasSuperior', 11)->nullable();
			$table->integer('nivelPlanoDeContas')->nullable();
			$table->integer('idPlanoReferencial')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPlanoDeContas','codigoGrupo','codigoEmpresa','codigoPlanoDeContas','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_planodecontas');
	}

}
