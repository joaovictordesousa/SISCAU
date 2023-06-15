<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxInstituicoesFinanceiras extends Model
{
    use HasFactory;

    protected $table = 'auxinstituicoesfinanceiras';
    
    protected $fillable = [
        'descricao'
    ];
}
