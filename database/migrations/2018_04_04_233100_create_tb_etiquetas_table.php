<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbEtiquetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_etiquetas', function(Blueprint $table)
		{
			$table->integer('idEtiquetas', true);
			$table->integer('idEmpresa')->nullable();
			$table->integer('codigoGrupo')->nullable();
			$table->integer('codigoEmpresa')->nullable();
			$table->string('titulo', 80)->nullable();
			$table->string('codigoBarras', 128)->nullable();
			$table->float('valor', 15)->nullable();
			$table->integer('quantidade')->nullable();
			$table->string('tipoImpressao', 45)->nullable();
			$table->string('tipoEtiqueta', 45)->nullable();
			$table->string('tipoConexao', 45)->nullable();
			$table->integer('atualizado')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_etiquetas');
	}

}
