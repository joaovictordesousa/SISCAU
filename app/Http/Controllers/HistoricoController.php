<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\Historico;

class HistoricoController extends Controller
{
    //
    public function pesquisa()
    {
        return view('pesquisa');
    }

    public function index(Request $request)
    {
        $historicos = Historico::query()
            ->when($request->filled('nome'), function ($query) use ($request) {
                $query->where('nome', 'like', '%' . $request->nome . '%');
            })
            ->get();

        return view('historico.index', compact('historicos'));
    }
}
