<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsGrupoempresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_grupoempresa', function(Blueprint $table)
		{
			$table->integer('codigoGrupo', true);
			$table->string('nomeGrupo', 50);
			$table->string('pastaImagemLogotipo', 80)->nullable();
			$table->string('extensaoImagemLogotipo', 3)->nullable();
			$table->integer('limiteUsuarios')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_grupoempresa');
	}

}
