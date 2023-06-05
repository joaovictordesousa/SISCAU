<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'GuiasRecolhimento';
    protected $fillable = [
        'recolhimento',
        'financeira',
        'agencias',
        'contas',
        'contatos',
        'aditivos',
        'datas_grs',
        'data_validade',
        'documentos',
        'numeros',
        'empresa',
        'valores',
        'numeros_nls',
        'historicos',
    ];
}
