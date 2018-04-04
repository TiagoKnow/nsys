<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_empresas', function(Blueprint $table)
		{
			$table->integer('idEmpresa', true);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('idBancoDados')->nullable();
			$table->string('nomeEmpresa', 80)->nullable();
			$table->string('nomeFantasia', 50)->nullable();
			$table->string('cnpjEmpresa', 15)->nullable();
			$table->string('InscricaoEstadual', 15)->nullable();
			$table->string('RegimeTributario', 40)->nullable();
			$table->string('cepEmpresa', 9)->nullable();
			$table->string('cidadeEmpresa', 40)->nullable();
			$table->string('bairroEmpresa', 25)->nullable();
			$table->string('enderecoEmpresa', 60)->nullable();
			$table->string('numeroEmpresa', 20)->nullable();
			$table->string('ufEmpresa', 2)->nullable();
			$table->string('telefoneEmpresa', 15)->nullable();
			$table->string('pastaImagemUsuario', 45)->nullable();
			$table->string('extensaoImagemUsuario', 45)->nullable();
			$table->string('dataValidade', 100)->nullable();
			$table->binary('imagemLogotipoEmpresa')->nullable();
			$table->primary(['idEmpresa','codigoGrupo','codigoEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_empresas');
	}

}
