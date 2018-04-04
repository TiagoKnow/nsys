<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFornecedorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_fornecedor', function(Blueprint $table)
		{
			$table->integer('idFornecedor', true);
			$table->integer('idEmpresa')->default(1);
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoFornecedor');
			$table->integer('statusFornecedor')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->string('cnpj', 15)->nullable();
			$table->string('nome', 70)->nullable();
			$table->string('contato', 45)->nullable();
			$table->string('telefone', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('cep', 45)->nullable();
			$table->string('cidade', 45)->nullable();
			$table->string('endereco', 45)->nullable();
			$table->string('numero', 10)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('uf', 45)->nullable();
			$table->integer('codigoPais')->nullable();
			$table->string('observacoes', 45)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idFornecedor','codigoGrupo','codigoEmpresa','codigoFornecedor','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_fornecedor');
	}

}
