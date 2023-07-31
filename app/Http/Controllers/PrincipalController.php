<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\AuxAgencias;
use App\Models\AuxTipoDocumento;
use App\Models\AuxInstituicoesFinanceiras;
use App\Models\AuxEmpresas;
use App\Models\GuiasRecolhimento;
use App\Models\Filtro;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $historico = Filtro::paginate(15);

        // chamando dados das tabelas auxiliares
        $recolhimentos = AuxTipoRecolhimento::all();
        $agencias = AuxAgencias::all();
        $documentos = AuxTipoDocumento::all();
 
        return view('pesquisa', [
            'recolhimentos' => $recolhimentos,
            'agencias' => $agencias,
            'documentos' => $documentos,
            // 'historico' => $historico
        ]);
    }


    public function create()
    {
        //função de cadastrar os select de outras tabelas auxiliares

        //Quando não tiver o select seria somente o retorn view('cadastro')

    //A função create em si é usada para exibir o formulário de criação de um recurso, ou seja, 
    //é usada para exibir um formulário no qual os usuários podem preencher os dados necessários 
    //para criar um novo registro no banco de dados.

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

        $request['valor'] = str_replace(',', '.', $request['valor']); // função de colocar o . no 

        //Cadastrar no banco de dados.
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
        // dd($historico);
        

        return view('show', [
            'GuiasRecolhimento' => $GuiasRecolhimento,
        ]);

            // view para mostrar o view show
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

		// $historicoCollection = collect($historico);
		// $perPage = 10;

		// $paginate = new Paginator($historicoCollection, $perPage);
        

            return view('historico', [
                'historico' => $historico
            ]);

            // 00001/1996
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuiasRecolhimento $GuiasRecolhimento)
    {
                //  dd($GuiasRecolhimento);

        $recolhimentos = AuxTipoRecolhimento::all();
        $financas = AuxInstituicoesFinanceiras::all();
        $agencia = AuxAgencias::all();
        $empresa = AuxEmpresas::all();
        $documento = AuxTipoDocumento::all();
        

        return view('edit', [
            'GuiasRecolhimento' => $GuiasRecolhimento,
            'recolhimentos' => $recolhimentos, 
            'financas' => $financas,
            'agencia' => $agencia,
            'empresa' => $empresa,
            'documento' => $documento
           
        ]);
            
    } 
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // dd($request);
        $request['valor'] = str_replace(',', '.', $request['valor']); // função de colocar o . no ,
        
        $NewGuiaRecolhimento = [
            'auxtiporecolhimentoid' => $request->input('auxtiporecolhimentoid'),
            'auxinstituicaofinanceiraid' => $request->input('auxinstituicaofinanceiraid'),
            'auxagenciaid' => $request->input('auxagenciaid'),
            'numeroconta' => $request->input('numeroconta'),
            'numerocontrato' => $request->input('numerocontrato'),
            'aditivo' => $request->input('aditivo'),
            'datagr' => $request->input('datagr'),
            'datavalidade' => $request->input('datavalidade'),
            'auxtipodocumentoid' => $request->input('auxtipodocumentoid'),
            'numero' => $request->input('numero'),
            'auxempresaid' => $request->input('auxempresaid'),
            'valor' => $request->input('valor'),
            'numerodocumento' => $request->input('numerodocumento'),
            'numeronl' => $request->input('numeronl'),
            'historico' => $request->input('historico')
        ];

        // Atualização de resultado
        // dd($request);

        GuiasRecolhimento::where('id', $id)->update($NewGuiaRecolhimento);

        return redirect()->route('pesquisa')->with('success', 'Guia de recolhimento alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        // Apagar registro
        GuiasRecolhimento::where('id', $id)->delete();

        // Definir mensagem de sucesso na sessão
        session()->flash('success', 'Registro excluído com sucesso.');
    
        return redirect()->route('pesquisa');

    }

    public function confirmdestroy(GuiasRecolhimento $GuiasRecolhimento)
    {
        return view('destroy', [
            'GuiasRecolhimento' => $GuiasRecolhimento
        ]);

    }

}
