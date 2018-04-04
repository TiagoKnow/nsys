<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPlanodecontasrelacionamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_planodecontasrelacionamento', function(Blueprint $table)
		{
			$table->integer('idPlanoDeContasRelacionamento', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->string('codigoPlanoDeContasVendas', 11)->nullable();
			$table->string('codigoPlanoDeContasOS', 11)->nullable();
			$table->string('codigoPlanoDeContasBoletos', 11)->nullable();
			$table->string('codigoPlanoDeContasRecibos', 11)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idPlanoDeContasRelacionamento','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_planodecontasrelacionamento');
	}

}
