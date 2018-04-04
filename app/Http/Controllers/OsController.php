<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Os;
use App\Vendas;
use Charts; // adicionei essa para teste

class OsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Requer validação
    }

    public function index(Request $request)
    {
        $mesext = "";
        $anoext = "";

        $mes = date('m') - 1;
        $ano = date('Y') - 1;

        //$mes = $mes + 1;

        $array1 = array();
        $array2 = array();
        $array3 = array();

        for($i = 0; $i < 12; $i++){
            $mes = $mes + 1;
            if($mes > 12){
                $mes = 1;
                $ano = $ano + 1;
            }
            if($mes ==  1){$mesext = 'Janeiro';}
            if($mes ==  2){$mesext = 'Fevereiro';}
            if($mes ==  3){$mesext = 'Março';}
            if($mes ==  4){$mesext = 'Abril';}
            if($mes ==  5){$mesext = 'Maio';}
            if($mes ==  6){$mesext = 'Junho';}
            if($mes ==  7){$mesext = 'Julho';}
            if($mes ==  8){$mesext = 'Agosto';}
            if($mes ==  9){$mesext = 'Setembro';}
            if($mes == 10){$mesext = 'Outubro';}
            if($mes == 11){$mesext = 'Novembro';}
            if($mes == 12){$mesext = 'Dezembro';}

            $array1[] = $mesext . '/' . $ano;

            $dataI = $ano . '-' . $mes . '-01';
            $dataF = $ano . '-' . $mes . '-31';

            $vendas = Vendas::whereBetween('dataVenda', [$dataI, $dataF])
                ->pluck('idVenda')
            ;

            $totalVendas = $vendas->count();

            $array3[] = $totalVendas;
        }

        //var_dump($array3);

        $chart = Charts::multi('areaspline', 'highcharts')
            // Setup the chart settings
            ->title("Dashboard das ordens de serviço")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 250) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)

            ->elementLabel('Quantiade')

            ->dataset('Total de os',   $array3)

            // Setup what the values mean
            ->labels($array1);

        $chart2 = Charts::create('pie', 'highcharts')
            ->title('Resumo por OS')
            ->labels(['Concluídas', 'Canceladas', 'Em produção'])
            ->values([5,10,20])
            ->dimensions(500,200)
            ->responsive(false);

        $os = Os::where('idEmpresa', 1)
        ->orderBy('idOrdemServico', 'desc');
        $totalOs = $os->count();

        return view('producao.listar',
            [
                'os' => $os->paginate(25),
                'totalOs' => $totalOs,
                'chart' => $chart,
                'chartpie' => $chart2
            ]
        );
    }
}
