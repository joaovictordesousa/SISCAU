<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
					   tipoconsulta', [
                        'nrcontrato' => $nrcontrato,
                        'nrdocumento' => $
                       ]);

                       return view('historico');        
       
    }
}
