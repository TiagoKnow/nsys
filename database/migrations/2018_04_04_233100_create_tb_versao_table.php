<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbVersaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_versao', function(Blueprint $table)
		{
			$table->integer('cod_versao', true);
			$table->string('descricao', 45)->nullable();
			$table->date('data')->nullable();
			$table->string('obs', 45)->nullable();
			$table->string('integrantes', 45)->nullable();
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
		Schema::drop('tb_versao');
	}

}
