<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_funcionarios', function(Blueprint $table)
		{
			$table->integer('idFuncionario', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoFuncionario');
			$table->integer('codigoDepartamento')->nullable();
			$table->integer('statusFuncionario')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->integer('tipoPessoa')->nullable();
			$table->string('cpfCnpj', 15)->nullable();
			$table->date('dataAdmissao')->nullable();
			$table->string('nomeFuncionario', 50)->nullable();
			$table->string('rg', 9)->nullable();
			$table->integer('sexo')->nullable();
			$table->integer('estadoCivil')->nullable();
			$table->string('profissao', 30)->nullable();
			$table->date('dataNascimento')->nullable();
			$table->string('nacionalidade', 50)->nullable();
			$table->string('naturalidade', 50)->nullable();
			$table->string('ufNaturalidade', 2)->nullable();
			$table->string('cep', 8)->nullable();
			$table->string('cidade', 30)->nullable();
			$table->string('municipio', 40)->nullable();
			$table->string('endereco', 50)->nullable();
			$table->string('complemento', 40)->nullable();
			$table->string('bairro', 30)->nullable();
			$table->string('numero', 15)->nullable();
			$table->string('uf', 2)->nullable();
			$table->integer('codigoPais')->nullable();
			$table->string('telefone', 10)->nullable();
			$table->string('celular', 11)->nullable();
			$table->string('email', 35)->nullable();
			$table->string('observacoes', 300)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->binary('imagemFuncionario')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idFuncionario','codigoGrupo','codigoEmpresa','codigoFuncionario','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_funcionarios');
	}

}
