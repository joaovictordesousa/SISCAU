<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\AuxAgencias;
use App\Models\AuxTipoDocumento;

class PesquisaController extends Controller
{
    public function pesquisa()
    {
        return view('pesquisa');

    }
    
    // public function filtrar(Request $request){
    //     $NovaGuia = new GuiasRecolhimento;
    //     $NovaGuia->create($request->all());
    //   return view('pesquisa');
    // }

}

