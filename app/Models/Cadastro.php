<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;
    protected $fillable = [
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
                                   