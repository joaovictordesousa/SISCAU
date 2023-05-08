<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Historico;


class PesquisaControllers extends Controller
{
    public function pesquisa()
        {
            return view ('cadastro');
        }
}

