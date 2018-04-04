<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbBoletosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_boletos', function(Blueprint $table)
		{
			$table->integer('idBoletos', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoBoleto');
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoContaCorrente')->nullable();
			$table->integer('codigoBoletoInstrucao')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->integer('codigoPagamento')->nullable();
			$table->string('tipoDeFaturamento', 25)->nullable();
			$table->string('nossoNumero', 11)->nullable();
			$table->date('dataEmissao')->nullable();
			$table->string('numeroDocumento', 10)->nullable();
			$table->string('numeroDAC', 1)->nullable();
			$table->float('valorDevido', 15)->nullable();
			$table->date('dataDeVencimento')->nullable();
			$table->float('valorPago', 15)->nullable();
			$table->date('dataDePagamento')->nullable();
			$table->string('Instrucao1', 50)->nullable();
			$table->string('Instrucao3', 50)->nullable();
			$table->string('CodigoDeBarras1', 11)->nullable();
			$table->string('CodigoDeBarras2', 12)->nullable();
			$table->string('CodigoDeBarras3', 12)->nullable();
			$table->string('CodigoDeBarras4', 1)->nullable();
			$table->string('CodigoDeBarras5', 14)->nullable();
			$table->string('CodigoDeBarras', 44)->nullable();
			$table->integer('ocorrenciaRemessa')->nullable();
			$table->integer('ocorrenciaRetorno')->nullable();
			$table->integer('ParcelaAtual')->nullable();
			$table->integer('TotalDeParcelas')->nullable();
			$table->integer('statusBoleto')->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idBoletos','codigoGrupo','codigoEmpresa','codigoBoleto','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_boletos');
	}

}
