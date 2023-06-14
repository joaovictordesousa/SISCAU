<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxTipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'auxtipodocumento';
    protected $fillable = [
        'descricao'
    ];

}
