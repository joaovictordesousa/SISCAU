<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use Illuminate\Http\Request;


class HistoricoController extends Controller
{
    // 
    public function historico()
    {   
            
        return view('historico');
             
    }
}
