<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxAgencias extends Model
{
    use HasFactory;

    protected $fillable = [
        'auxinstituicoesfinanceiraid',
        'codigo',
        'descricao'
    ];
}
