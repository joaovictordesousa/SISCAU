<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class Filtro extends Model
{
    use HasFactory;

    protected $table = 'filtro';

    protected $fillable = [
						'nr',
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

	public static function filtrar(Request $request) {
		
	}
}
