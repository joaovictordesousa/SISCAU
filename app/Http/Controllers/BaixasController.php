<?php

namespace App\Http\Controllers;

use App\Models\GuiasRecolhimento;
use App\Models\Baixas;
use Illuminate\Http\Request;

class BaixasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function baixas()
    {
        return view('baixas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $baixa = new Baixas();
        // $baixa->data = '2023-08-28';
        // // Outros campos...
        // $baixa->guiasrecolhimento = $GUia; // ID da GuiaRecolhimento
        // $baixa->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}