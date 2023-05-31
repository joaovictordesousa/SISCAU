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

    public function store(request $request) {
        
        $Cadastro = new Cadastro;

        $Cadastro->recolhimento = $request->recolhimento;
        $Cadastro->financeira = $request->financeira;
        $Cadastro->agencias = $request->agencias;
        $Cadastro->contas = $request->contas;
        $Cadastro->contatos = $request->contatos;
        $Cadastro->aditivos = $request->aditivos;
        $Cadastro->datas_grs = $request->datas_grs;
        $Cadastro->data_validade = $request->data_validade;
        $Cadastro->documentos = $request->documentos;
        $Cadastro->numeros = $request->numeros;
        $Cadastro->empresa = $request->empresa;
        $Cadastro->valores = $request->valores;
        $Cadastro->documentos = $request->documentos;
        $Cadastro->numeros_nls = $request->numeros_nls;
        $Cadastro->historicos = $request->historicos;

        $Cadastro->save();

        return redirect('/');
    }
}
