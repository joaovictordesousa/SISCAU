<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filtro extends Model
{
    use HasFactory;

    protected $table = 'filtro';

    protected $fillable = [
        			   'nrdocumento',
					   'auxtiporecolhimentoid',
					   'codigoagencia',
					   'nrbaixaprocesso',
					   'nrcpfcnpj',
					   'datagrinicio',
					   'datagrfim',
					   'datavalidadeinicio',
					   'datavalidadefim',
					   'databaixainicio',
					   'databaixafim',
					   'nrauxtipodocumentoid',
					   'nrnumeronl',
					   'tipoconsulta'
    ];
}
