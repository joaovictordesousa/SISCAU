<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Cadastro;
use App\Models\AuxTipoRecolhimento;
use App\Models\GuiasRecolhimento;
use App\Models\AuxInstituicoesFinanceiras;

class CadastroController extends Controller
{
    //
    public function pesquisa()
    {
        return view('pesquisa');
    }

    public function cadastro()
    {

        $auxtiporecolhimento = AuxTipoRecolhimento::all();
            return view('cadastro', [
            'auxtiporecolhimento' => $auxtiporecolhimento
        ]);

    }

    // public function cadastro1() {
    //     $auxinstituicoesfinanceiras = AuxInstituicoesFinanceiras::all();
    //     return view('cadastro', [
    //     'auxinstituicoesfinanceiras' => $auxinstituicoesfinanceiras
    // ]);
    // }


    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário

        $request->validate([
            'auxtiporecolhimentoid' => 'required',
            'auxinstituicaofinanceiraid' => 'required',
            'auxagenciaid' => 'required',
            'auxempresaid' => 'required',
            'datagr' => 'required',
            'datavalidade' => 'required',
            'auxtipodocumentoid' => 'required',
            'numero' => 'required',
            'numeroconta' => 'required',
            'numerocontrato' => 'required',
            'aditivo' => 'required',
            'valor' => 'required',
            'numerodocumento' => 'required',
            'numeronl' => 'required',
            'historico' => 'required',
        ]);

        // Criação de um novo registro no banco de dados 
        $cadastro = GuiasRecolhimento::create([
            'auxtiporecolhimentoid' => $request->input('auxtiporecolhimentoid'),
            'auxinstituicaofinanceiraid' => $request->input('auxinstituicaofinanceiraid'),
            'auxagenciaid' => $request->input('auxagenciaid'),
            'auxempresaid' => $request->input('auxempresaid'),
            'datagr' => $request->input('datagr'),
            'datavalidade' => $request->input('datavalidade'),
            'auxtipodocumentoid' => $request->input('auxtipodocumentoid'),
            'numero' => $request->input('numero'),
            'numeroconta' => $request->input('numeroconta'),
            'numerocontrato' => $request->input('numerocontrato'),
            'aditivo' => $request->input('aditivo'),
            'valor' => $request->input('valor'),
            'numerodocumento' => $request->input('numerodocumento'),
            'numeronl' => $request->input('numeronl'),
            'historico' => $request->input('historico'),
        ]);

        // Atribuição dos valores dos campos
       

        // Salva o registro no banco de dados
        $cadastro->save();

        // Redireciona para uma rota ou retorna uma resposta de sucesso
        return redirect()->route('/cadastro'); 
        
    }
}
