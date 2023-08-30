<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuxInstituicoesFinanceiras extends Model
{
    use HasFactory;

    protected $table = 'auxinstituicoesfinanceiras';
    
    protected $fillable = [
        'descricao'
    ];

    public function GuiasRecolhimento(): BelongsTo {
        return $this->belongsTo(GuiasRecolhimento::class, 'auxtiporecolhimentoid', 'id');
    }
}
