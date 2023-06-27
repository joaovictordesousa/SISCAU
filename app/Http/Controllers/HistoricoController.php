<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use Illuminate\Http\Request;


class HistoricoController extends Controller
{
    // 
    public function historico()
    {   

        $filtro = GuiasRecolhimento::all();

        return view('historico', [
            'filtro' => $filtro
        ]);
            
    }
}
