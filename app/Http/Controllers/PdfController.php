<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuiasRecolhimento;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function geraPdf(){
        
        $GuiasRecolhimento = GuiasRecolhimento::all();

        $pdf = Pdf::loadView('pdf', compact('GuiasRecolhimento'));

        return $pdf->setPaper('a4')->stream('pdf');
    }
}
