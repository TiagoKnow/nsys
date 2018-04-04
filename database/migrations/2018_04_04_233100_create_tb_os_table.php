<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_os', function(Blueprint $table)
		{
			$table->integer('idOrdemServico', true);
			$table->integer('idEmpresa');
			$table->integer('codigoGrupo');
			$table->integer('codigoEmpresa');
			$table->integer('codigoOrdemServico');
			$table->integer('codigoCliente')->nullable();
			$table->integer('codigoUsuario')->nullable();
			$table->date('dataCadastro')->nullable();
			$table->date('dataEntrada')->nullable();
			$table->time('horaEntrada')->nullable();
			$table->date('dataSaida')->nullable();
			$table->time('horaSaida')->nullable();
			$table->date('dataGarantia')->nullable();
			$table->date('dataPrevista')->nullable();
			$table->integer('codigoSituacao')->nullable();
			$table->float('valorAdiantamento', 15)->nullable();
			$table->float('valorMaoDeObra', 15)->nullable();
			$table->float('valorPecas', 15)->nullable();
			$table->float('valorTerceiros', 15)->nullable();
			$table->float('valorOutros', 15)->nullable();
			$table->float('valorDeslocamento', 15)->nullable();
			$table->string('descricao', 70)->nullable();
			$table->string('marca', 45)->nullable();
			$table->string('modelo', 45)->nullable();
			$table->string('serie', 45)->nullable();
			$table->string('patrimonio', 45)->nullable();
			$table->string('numeroNF', 12)->nullable();
			$table->string('acessorio', 45)->nullable();
			$table->string('defeito', 300)->nullable();
			$table->string('observacoes', 500)->nullable();
			$table->string('laudo', 5000)->nullable();
			$table->integer('prioridade')->nullable();
			$table->integer('statusOs')->nullable();
			$table->integer('aprovacao')->nullable();
			$table->integer('pagamento')->nullable();
			$table->date('dataAlterou')->nullable();
			$table->time('horaAlterou')->nullable();
			$table->integer('usuarioAlterou')->nullable();
			$table->integer('idEmpresaAlterou')->nullable();
			$table->integer('codigoGrupoAlterou')->nullable();
			$table->integer('codigoEmpresaAlterou')->nullable();
			$table->time('horaCadastro')->nullable();
			$table->integer('codigoCancelamento')->nullable();
			$table->string('detalhesCancelamento', 300)->nullable();
			$table->date('dataCancelou')->nullable();
			$table->time('horaCancelou')->nullable();
			$table->integer('usuarioCancelou')->nullable();
			$table->integer('idEmpresaCancelou')->nullable();
			$table->integer('computadorCancelou')->nullable();
			$table->date('dataFinalizou')->nullable();
			$table->time('horaFinalizou')->nullable();
			$table->integer('usuarioFinalizou')->nullable();
			$table->integer('idEmpresaFinalizou')->nullable();
			$table->integer('computadorFinalizou')->nullable();
			$table->integer('codigoCancelamentoSemSolucao')->nullable();
			$table->string('detalhesCancelamentoSemSolucao', 300)->nullable();
			$table->date('dataSemSolucao')->nullable();
			$table->time('horaSemSolucao')->nullable();
			$table->integer('usuarioSemSolucao')->nullable();
			$table->integer('idEmpresaSemSolucao')->nullable();
			$table->integer('computadorSemSolucao')->nullable();
			$table->integer('atualizado')->nullable();
			$table->primary(['idOrdemServico','codigoGrupo','codigoEmpresa','codigoOrdemServico','idEmpresa']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_os');
	}

}
