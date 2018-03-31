<?php

namespace App\Http\Controllers;

use App\Vendas;
use Illuminate\Http\Request;
use Charts; // adicionei essa para teste

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //var_dump($vendas);

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

            $totalOs = $vendas->count();

            $array3[] = $totalOs;

            foreach($vendas as $venda){
                //$var = $venda->observacoes;
            }
        }

        //var_dump($array3);

      $chart = Charts::multi('areaspline', 'highcharts')
            // Setup the chart settings
            ->title("Dashboard de vendas em produção")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 450) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)

            ->dataset('Total de vendas',   $array3)

           // ->dataset('Total de notas processadas', [11,2,12,4,5,20,7,10,9,10,11,12])


            // Setup what the values mean
            ->labels($array1);

        return view('home', ['chart' => $chart], ['chart2' => $chart]);
    }
}
