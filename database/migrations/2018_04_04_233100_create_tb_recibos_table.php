<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbRecibosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_recibos', function(Blueprint $table)
		{
			$table->integer('idRecibo', true);
			$table->integer('idEmpresa')->default(1);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoRecibo');
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataRecibo')->nullable();
			$table->time('horaRecibo')->nullable();
			$table->integer('status')->nullable();
			$table->string('observacoes', 450)->nullable();
			$table->integer('ocorrenciaRecibo')->nullable();
			$table->date('dataEmissaoLote')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idRecibo','codigoGrupo','codigoEmpresa','codigoRecibo','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_recibos');
	}

}
