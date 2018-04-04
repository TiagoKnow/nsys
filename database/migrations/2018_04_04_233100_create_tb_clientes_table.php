<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_clientes', function(Blueprint $table)
		{
			$table->integer('idCliente', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoCliente');
			$table->integer('statusCliente')->nullable();
			$table->integer('fisicaJuridica')->nullable();
			$table->integer('cpfCnpjNaoInformado')->nullable();
			$table->string('cpfCnpj', 15)->nullable();
			$table->string('InscricaoEstadual', 15)->nullable();
			$table->date('dataNascAber')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->string('nome', 70)->nullable();
			$table->integer('sexo')->nullable();
			$table->integer('estadoCivil')->nullable();
			$table->string('telefone', 11)->nullable();
			$table->string('contato', 30)->nullable();
			$table->string('email', 40)->nullable();
			$table->string('cei', 35)->nullable();
			$table->string('celular', 12)->nullable();
			$table->string('profissao', 45)->nullable();
			$table->string('site', 45)->nullable();
			$table->string('contrato', 30)->nullable();
			$table->string('cep', 9)->nullable();
			$table->string('cidade', 50)->nullable();
			$table->string('endereco', 40)->nullable();
			$table->string('numero', 25)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('uf', 2)->nullable();
			$table->integer('codigoPais')->nullable();
			$table->string('observacoes', 300)->nullable();
			$table->date('dataalterou')->nullable();
			$table->time('horaalterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idCliente','codigoGrupo','codigoEmpresa','codigoCliente','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_clientes');
	}

}
