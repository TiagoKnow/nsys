<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsPlanoReferencialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_plano_referencial', function(Blueprint $table)
		{
			$table->integer('idPlanoReferencial', true);
			$table->integer('codigoGrupo')->nullable()->default(0);
			$table->string('codigoPlanoReferencial', 16)->nullable();
			$table->string('descricaoPlanoReferencial', 800)->nullable();
			$table->date('dataInicial')->nullable();
			$table->date('dataFinal')->nullable();
			$table->string('tipoPlanoReferencial', 1)->nullable();
			$table->string('codigoPlanoReferencialSuperior', 13)->nullable();
			$table->integer('nivel')->nullable();
			$table->integer('natureza')->nullable();
			$table->string('orientacoes', 2000)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_plano_referencial');
	}

}
