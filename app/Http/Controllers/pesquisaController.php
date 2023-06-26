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

            $nr = $request->input('nr');
            $nrcontrato = $request->input('nrcontrato');
            $nrdocumento = $request->input('nrdocumento');
            $auxtiporecolhimentoid = $request->input('auxtiporecolhimentoid');
            $codigoagencia = $request->input('codigoagencia');
            $nrbaixaprocesso = $request->input('nrbaixaprocesso');
            $nrcpfcnpj = $request->input('nrcpfcnpj');
            $datagrinicio = $request->input('datagrinicio');
            $datagrfim = $request->input('datagrfim');
            $datavalidadeinicio = $request->input('datavalidadeinicio');
            $datavalidadefim = $request->input('datavalidadefim');
            $databaixainicio = $request->input('databaixainicio');
            $databaixafim = $request->input('databaixafim');
            $nrauxtipodocumentoid = $request->input('nrauxtipodocumentoid');
            $nrnumeronl = $request->input('nrnumeronl');
            $tipoconsulta = $request->input('tipoconsulta');
                   
            
            
            $filtro = DB::select('SELECT auxtiporecolhimento, razaosocial, valor FROM pesquisa(
                nr,
                nrcontrato,
                nrdocumento,
                auxtiporecolhimentoid,
                codigoagencia,
                nrbaixaprocesso,
                nrcpfcnpj,
                datagrinicio,
                datagrfim,
                datavalidadeinicio,
                datavalidadefim,
                databaixainicio,
                databaixafim,
                nrauxtipodocumentoid,
                nrnumeronl,
                tipoconsulta)', [

                    'nr' => $nr,
                    'nrcontrato' => $nrcontrato, 
                    'nrdocumento' => $nrdocumento,
                    'auxtiporecolhimentoid' => $auxtiporecolhimentoid,
                    'codigoagencia' => $codigoagencia,
                    'nrbaixaprocesso' => $nrbaixaprocesso,
                    'nrcpfcnpj' => $nrcpfcnpj,
                    'datagrinicio' => $datagrinicio,
                    'datagrfim' => $datagrfim,
                    'datavalidadeinicio' => $datavalidadeinicio,
                    'datavalidadefim' => $datavalidadefim,
                    'databaixainicio' => $databaixainicio,
                    'databaixafim' => $databaixafim,
                    'nrauxtipodocumentoid' => $nrauxtipodocumentoid,
                    'nrnumeronl' => $nrnumeronl,
                    'tipoconsulta' => $tipoconsulta

                ]);
                

                return view('historico', [
                    'filtro' => $filtro
                ]);

        }

}

