<?php

namespace App\Http\Controllers;

use App\Models\AuxAgencias;
use App\Models\AuxInstituicoesFinanceiras;
use Illuminate\Http\Request;
use App\Models\AuxTipoRecolhimento;
use App\Models\GuiasRecolhimento;
use App\Models\AuxTipoDocumento;
use App\Models\AuxEmpresas;

class CadastroController extends Controller
{
    public function RenderCadastroView() {

        $recolhimentos = AuxTipoRecolhimento::all();
        $financas = AuxInstituicoesFinanceiras::all();
        $agencia = AuxAgencias::all();
        $documento = AuxTipoDocumento::all();
        $empresa = AuxEmpresas::all();

        // dd($opcoes);
        return view('cadastro', [
        'recolhimentos' => $recolhimentos, 
        'financas' => $financas,
        'agencia' => $agencia,
        'documento' => $documento,
        'empresa' => $empresa
        ]);

        // all = select na tabela.
    }

    public function Cadastrar(Request $request){
        $NovaGuia = new guiasrecolhimento;
        $NovaGuia->create($request->all());
      return view('cadastro');
    }

}