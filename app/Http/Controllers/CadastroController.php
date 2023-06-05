<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Cadastro;

class CadastroController extends Controller
{
    //
    public function pesquisa()
    {
        return view('pesquisa');
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'recolhimento' => 'required',
            'financeira' => 'required',
            'agencias' => 'required',
            'contas' => 'required',
            'contatos' => 'required',
            'aditivos' => 'required',
            'datas_grs' => 'required',
            'data_validade' => 'required',
            'documentos' => 'required',
            'numeros' => 'required',
            'empresa' => 'required',
            'valores' => 'required',
            'numeros_nls' => 'required',
            'historicos' => 'required',
        ]);

        // Criação de um novo registro no banco de dados
        $cadastrar = new \App\Models\Cadastro; 

        // Atribuição dos valores dos campos
        $cadastrar->recolhimento = $request->recolhimento;
        $cadastrar->financeira = $request->financeira;
        $cadastrar->agencias = $request->agencias;
        $cadastrar->contas = $request->contas;
        $cadastrar->contatos = $request->contatos;
        $cadastrar->aditivos = $request->aditivos;
        $cadastrar->datas_grs = $request->datas_grs;
        $cadastrar->data_validade = $request->data_validade;
        $cadastrar->documentos = $request->documentos;
        $cadastrar->numeros = $request->numeros;
        $cadastrar->empresa = $request->empresa;
        $cadastrar->valores = $request->valores;
        $cadastrar->numeros_nls = $request->numeros_nls;
        $cadastrar->historicos = $request->historicos;

        // Salva o registro no banco de dados
        $cadastrar->save();

        // Redireciona para uma rota ou retorna uma resposta de sucesso
        return redirect()->route('cadastro'); 
    }
}
