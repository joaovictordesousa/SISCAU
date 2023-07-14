<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\AuxAgencias;
use App\Models\AuxTipoDocumento;
use App\Models\AuxInstituicoesFinanceiras;
use App\Models\AuxEmpresas;
use App\Models\GuiasRecolhimento;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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


    public function create()
    {
        $recolhimentos = AuxTipoRecolhimento::all();
        $financas = AuxInstituicoesFinanceiras::all();
        $agencia = AuxAgencias::all();
        $documento = AuxTipoDocumento::all();
        $empresa = AuxEmpresas::all();

        // dd($recolhimentos);

        return view('cadastro', [
            'recolhimentos' => $recolhimentos, 
            'financas' => $financas,
            'agencia' => $agencia,
            'documento' => $documento,
            'empresa' => $empresa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novaGuia = new GuiasRecolhimento;
        $novaGuia->fill($request->all());
        $novaGuia->save();

        return redirect()->route('pesquisa')->with('success', 'Guia de recolhimento cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show( GuiasRecolhimento $GuiasRecolhimento )
    {
        return view('show', [
            'GuiasRecolhimento' => $GuiasRecolhimento]);
    }

    public function filtrar(Request $request)
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
                
        $historico = DB::select("
            SELECT * FROM pesquisa(
                :nr,
                :nrcontrato,
                :nrdocumento,
                :auxtiporecolhimentoid,
                :codigoagencia,
                :nrbaixaprocesso,
                :nrcpfcnpj,
                :datagrinicio,
                :datagrfim,
                :datavalidadeinicio,
                :datavalidadefim,
                :databaixainicio,
                :databaixafim,
                :nrauxtipodocumentoid,
                :nrnumeronl,
                :tipoconsulta
            )

        ", [
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

        //   dd($filtro);

            //função de filtro do banco 
            
            return view('historico', [
                'historico' => $historico,
            ]);

            
            // 00001/1996
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuiasRecolhimento $GuiasRecolhimento)
    {

        $recolhimentos = AuxTipoRecolhimento::all();
        $financas = AuxInstituicoesFinanceiras::all();
        $agencia = AuxAgencias::all();
        $documento = AuxTipoDocumento::all();
        $empresa = AuxEmpresas::all();

        return view('edit', [
            'GuiasRecolhimento' => $GuiasRecolhimento,
            'recolhimentos' => $recolhimentos, 
            'financas' => $financas,
            'agencia' => $agencia,
            'documento' => $documento,
            'empresa' => $empresa
        ]);
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GuiasRecolhimento::where('id', $id)->update($request);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GuiasRecolhimento::where('id', $id)->delete();
        return redirect()->route('pesquisa');
    }

    public function confirmdestroy(GuiasRecolhimento $GuiasRecolhimento)
    {
        return view('destroy', [
            'GuiasRecolhimento' => $GuiasRecolhimento
        ]);

    }
}
