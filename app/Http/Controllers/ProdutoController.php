<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Requer validação
    }

    public function index(Request $request)
    {
        $produtos = Produtos::where('idEmpresa', 10);
        $totalProdutos = $produtos->count();

        return view('vendas.listar',
            [
                'produtos' => $produtos->paginate(10),
                'totalProdutos' => $totalProdutos
            ]
        );
    }

}
