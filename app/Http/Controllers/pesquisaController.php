<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Filtro;
use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\AuxAgencias;
use App\Models\AuxTipoDocumento;
use Illuminate\Support\Facades\DB;

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

    public function filtro(Request $request) 
        {

            $nr = $request->input('nr', null);
            $nrcontrato = $request->input('nrcontrato', null);
            $nrdocumento = $request->input('nrdocumento', null);
            $auxtiporecolhimentoid = $request->input('auxtiporecolhimentoid', null);
            $codigoagencia = $request->input('codigoagencia', null);
            $nrbaixaprocesso = $request->input('nrbaixaprocesso', null);
            $nrcpfcnpj = $request->input('nrcpfcnpj', null);
            $datagrinicio = $request->input('datagrinicio', null);
            $datagrfim = $request->input('datagrfim', null);
            $datavalidadeinicio = $request->input('datavalidadeinicio', null);
            $datavalidadefim = $request->input('datavalidadefim', null);
            $databaixainicio = $request->input('databaixainicio', null);
            $databaixafim = $request->input('databaixafim', null);
            $nrauxtipodocumentoid = $request->input('nrauxtipodocumentoid', null);
            $nrnumeronl = $request->input('nrnumeronl', null);
            $tipoconsulta = $request->input('tipoconsulta', null);
    
                   
            //  dd($nr);
            
            $filtro = DB::select("SELECT * FROM pesquisa(
              
              $nr
              $nrcontrato
              $nrdocumento
              $auxtiporecolhimentoid
              $codigoagencia
              $nrbaixaprocesso
              $nrcpfcnpj
              $datagrinicio
              $datagrfim
              $datavalidadeinicio 
              $datavalidadefim
              $databaixainicio
              $databaixafim
              $nrauxtipodocumentoid
              $nrnumeronl
              $tipoconsulta)
              
                    ");

                // dd($filtro);
                
                return view('historico', [
                    'filtro' => $filtro
                ]);

        }

}


