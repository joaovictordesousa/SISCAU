<?php

namespace App\Http\Controllers;

use App\Models\Filtro;
use Illuminate\Http\Request;
use App\Models\GuiasRecolhimento;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function geraPdf()
    {

        $historico = Filtro::get();

        $pdf = Pdf::loadView('gerapdf', compact('historico'));
        return $pdf->setPaper('a4')->stream('gerapdf');
    }
}