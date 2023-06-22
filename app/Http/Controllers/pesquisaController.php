<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\AuxAgencias;
use App\Models\AuxTipoDocumento;

class PesquisaController extends Controller
{
    // public function pesquisa()
    // {
    //     return view('pesquisa');

    // }

    public function pesquisa()
    {
        $recolhimentos = AuxTipoRecolhimento::all();
        $agencias = AuxAgencias::all();
        $documentos = AuxTipoDocumento::all();

        return view('pesquisa', [
            'recolhimentos' => $recolhimentos,
            'agencias' => $agencias,
            'documentos' => $documentos
        ]);

    }

}

