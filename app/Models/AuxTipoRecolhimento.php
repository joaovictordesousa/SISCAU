<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuiasRecolhimento;
use App\Models\DB;

class AuxTipoRecolhimento extends Model
{
    use HasFactory;

    protected $table = 'auxtiporecolhimento';
    protected $fillable = [
        'descricao',
        'codigocontabil'
    ];

}

