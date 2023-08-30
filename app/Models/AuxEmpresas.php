<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuxEmpresas extends Model
{
    use HasFactory;

    protected $table = 'auxempresas';
    
    protected $fillable = [
        'razaosocial',
        'endereco',
        'telefone',
        'contrato',
        'tipo',
        'CNPJ'
    ];

    public function GuiasRecolhimento(): BelongsTo {
        return $this->belongsTo(GuiasRecolhimento::class, 'auxempresaid', 'id');
    }

}
