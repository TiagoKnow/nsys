<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNsCepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ns_cep', function(Blueprint $table)
		{
			$table->string('cep', 9)->default('0');
			$table->string('endereco', 80)->nullable()->index('LOGRADOURO');
			$table->string('cidade', 35)->nullable()->index('CIDADE');
			$table->string('bairro', 35)->nullable()->index('BAIRRO');
			$table->string('uf', 2)->nullable()->index('UF');
			$table->integer('idCEP', true);
			$table->primary(['idCEP','cep']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ns_cep');
	}

}
