<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbModulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_modulos', function(Blueprint $table)
		{
			$table->integer('idModulo', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('usuarioModulo')->nullable();
			$table->string('modulos', 14)->nullable();
			$table->string('abasFaturamento', 6)->nullable();
			$table->string('abasVendas', 6)->nullable();
			$table->string('abasEstoque', 6)->nullable();
			$table->string('abasContabil', 6)->nullable();
			$table->string('abasFiscal', 6)->nullable();
			$table->string('abasContasAReceber', 6)->nullable();
			$table->string('abasContasAPagar', 6)->nullable();
			$table->string('abasProducao', 6)->nullable();
			$table->string('abasGestao', 6)->nullable();
			$table->string('abasCompras', 6)->nullable();
			$table->string('abasRecebimento', 6)->nullable();
			$table->string('abasCrm', 6)->nullable();
			$table->string('abascc', 6)->nullable();
			$table->string('abasRH', 6)->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idModulo','codigoGrupo','codigoEmpresa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_modulos');
	}

}
