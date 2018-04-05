<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Os::class, function (Faker $faker) {
    return [
        'idOrdemServico' => 1,
        'idEmpresa' => 1,
        'codigoGrupo' => 1,
        'codigoEmpresa' => 1,
        'codigoOrdemServico' => $faker->numberBetween(0, 135),
        'codigoCliente' => $faker->numberBetween(0, 135),
        'codigoUsuario' => $faker->numberBetween(0, 135),
        'dataCadastro' =>$faker->date('y-m-d'),
        'dataEntrada'=>$faker->date('y-m-d'),
        'horaEntrada' => '00:00:01',
        'dataSaida' =>$faker->date('y-m-d'),
        'horaSaida' => '00:00:01',
        'dataGarantia' =>$faker->date('y-m-d'),
        'dataPrevista' =>$faker->date('y-m-d'),
        'codigoSituacao' =>$faker->numberBetween(0,4),
        'valorAdiantamento' => $faker->numberBetween(541,3540),
        'valorMaoDeObra' => $faker->numberBetween(541,3540),
        'valorPecas' => $faker->numberBetween(541,3540),
        'valorTerceiros' => $faker->numberBetween(541,3540),
        'valorOutros' => $faker->numberBetween(541,3540),
        'descricao' =>$faker->name,
        'marca' => 'Qualquer marca',
        'modelo' => 'Qualquer modelo',
        'serie' => '000',
        'patrimonio' => 2,
        'valorDeslocamento'=> $faker->numberBetween(541,3540),
        'numeroNF' => 546,
        'acessorio' =>$faker->name,
        'defeito' =>$faker->name,
        'observacoes' =>$faker->name,
        'laudo' =>$faker->name,
        'prioridade'=> $faker->numberBetween(0,2),
        'statusOs'=> $faker->numberBetween(0,3),
        'aprovacao'=> $faker->numberBetween(0,1),
        'pagamento'=> $faker->numberBetween(0,1),
        'dataAlterou' =>$faker->date('y-m-d'),
        'horaAlterou' => '00:00:01',
        'usuarioAlterou'=> $faker->numberBetween(0,2),
        'idEmpresaAlterou'=> $faker->numberBetween(0,2),
        'codigoGrupoAlterou'=> $faker->numberBetween(0,2),
        'codigoEmpresaAlterou'=> $faker->numberBetween(0,2),
        'horaCadastro' => '00:00:01',
        'codigoCancelamento' => '00:00:01',
        'detalhesCancelamento' => 'teste222',
        'dataCancelou' =>$faker->date('y-m-d'),
        'horaCancelou' => '00:00:01',
        'usuarioCancelou' => $faker->numberBetween(0,1),
        'idEmpresaCancelou' => $faker->numberBetween(0,1),
        'computadorCancelou' => $faker->numberBetween(0,1),
        'dataFinalizou' =>$faker->date('y-m-d'),
        'horaFinalizou' => '00:00:01',
        'usuarioFinalizou' => $faker->numberBetween(0,1),
        'idEmpresaFinalizou' => $faker->numberBetween(0,1),
        'computadorFinalizou' => $faker->numberBetween(0,1),
        'codigoCancelamentoSemSolucao' => $faker->numberBetween(0,1),
        'detalhesCancelamentoSemSolucao' => 'ddddd',
        'dataSemSolucao' =>$faker->date('y-m-d'),
        'horaSemSolucao' => '00:00:01',
        'usuarioSemSolucao' => $faker->numberBetween(0,1),
        'idEmpresaSemSolucao' => $faker->numberBetween(0,1),
        'computadorSemSolucao' => $faker->numberBetween(0,1),
        'atualizado' => $faker->numberBetween(0,1),
    ];
});
