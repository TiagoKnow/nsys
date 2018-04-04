<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbTransportadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_transportadoras', function(Blueprint $table)
		{
			$table->integer('idTransportadora', true);
			$table->integer('idEmpresa')->default(1);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoTransportadora');
			$table->integer('fisicaJuridica')->nullable();
			$table->string('cpfCnpj', 15)->nullable();
			$table->string('InscricaoEstadual', 15)->nullable();
			$table->string('NomeTransportadora', 80)->nullable();
			$table->string('Cep', 9)->nullable();
			$table->string('Uf', 2)->nullable();
			$table->string('Cidade', 50)->nullable();
			$table->string('Bairro', 40)->nullable();
			$table->string('Endereco', 60)->nullable();
			$table->string('Numero', 25)->nullable();
			$table->integer('codigoPais')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idTransportadora','codigoGrupo','codigoEmpresa','codigoTransportadora','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_transportadoras');
	}

}
