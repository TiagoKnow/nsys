<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbDespesasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_despesas', function(Blueprint $table)
		{
			$table->integer('idDespesa', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoDespesa');
			$table->integer('codigoDespesaTipo')->nullable();
			$table->string('descricaoDespesa', 80)->nullable();
			$table->float('valorDespesa', 15)->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->string('codigoDeBarras', 80)->nullable();
			$table->integer('qtdMeses')->nullable();
			$table->date('dataVencimento')->nullable();
			$table->integer('codigoContaCorrente')->nullable();
			$table->date('dataPagamento')->nullable();
			$table->float('valorPago', 15)->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('codigoContaCorrenteDestino')->nullable();
			$table->integer('transferencia')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idDespesa','codigoGrupo','codigoEmpresa','codigoDespesa','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_despesas');
	}

}
