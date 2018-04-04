<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_oc', function(Blueprint $table)
		{
			$table->integer('idOrdemCompra', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrdemCompra');
			$table->integer('codigoComprador')->nullable();
			$table->integer('codigoFornecedor')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->date('dataDeCompra')->nullable();
			$table->time('horaDeCompra')->nullable();
			$table->float('valorDeCompra', 15)->nullable();
			$table->integer('codigoPagamento')->nullable();
			$table->date('dataDePagamento')->nullable();
			$table->time('horaDePagamento')->nullable();
			$table->date('dataDeRecebimento')->nullable();
			$table->time('horaDeRecebimento')->nullable();
			$table->string('cepDeRecebimento', 9)->nullable();
			$table->string('cidadeDeRecebimento', 30)->nullable();
			$table->string('enderecoDeRecebimento', 40)->nullable();
			$table->string('numeroDeRecebimento', 25)->nullable();
			$table->string('bairroDeRecebimento', 30)->nullable();
			$table->string('ufDeRecebimento', 2)->nullable();
			$table->integer('codigoPais')->nullable();
			$table->string('responsavelPeloRecebimento', 50)->nullable();
			$table->string('observacoes', 500)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrdemCompra','codigoGrupo','codigoEmpresa','codigoOrdemCompra','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_oc');
	}

}
