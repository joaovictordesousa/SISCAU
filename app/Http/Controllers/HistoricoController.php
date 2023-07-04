<?php

namespace App\Http\Controllers;
use App\Models\GuiasRecolhimento;

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

