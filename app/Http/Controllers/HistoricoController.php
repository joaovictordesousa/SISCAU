<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use Illuminate\Http\Request;


class HistoricoController extends Controller
{
    //
    public function historico($request)
    {
        // Method logic goes here
        // $results = DB::select('SELECT auxtiporecolhimento, razaosocial, valor FROM pesquisa(null,null,null,null,null,null,
        // 21051130000123, null, null, 2023-01-01, 2023-12-31, null, null, null, null, 5');
        
        // return view('historico')->with('results', $results);

        // dd($results);

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
       


        $pesquisa = DB::select('SELECT auxtiporecolhimento, razaosocial, valor FROM pesquisa(
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

                    return view('historico.index', ['pesquisa' => $pesquisa]);

        

        // return view('historico');        
       
    }
}
