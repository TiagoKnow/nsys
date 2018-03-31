<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Os;

class OsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //Requer validação
    }

    public function index(Request $request)
    {
        $os = Os::where('idEmpresa', 1)
        ->orderBy('idOrdemServico', 'desc');
        $totalOs = $os->count();

        return view('producao.listar',
            [
                'os' => $os->paginate(25),
                'totalOs' => $totalOs
            ]
        );
    }
}
