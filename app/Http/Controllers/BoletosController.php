<?php

namespace App\Http\Controllers;

use App\Boletos;
use Illuminate\Http\Request;

class BoletosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Requer validação
    }

    public function index(Request $request)
    {
        $boletos = Boletos::where('idEmpresa', 1)
            ->orderBy('idBoletos', 'desc');
        $totalBoletos = $boletos->count();

        return view('contascorrentes/boletos.listar',
            [
                'boletos' => $boletos->paginate(25),
                'totalBoletos' => $totalBoletos
            ]
        );
    }
}
