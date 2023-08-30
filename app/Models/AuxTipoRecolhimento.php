<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuiasRecolhimento;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuxTipoRecolhimento extends Model
{
    use HasFactory;

    protected $table = 'auxtiporecolhimento';

    protected $fillable = [
        'descricao',
        'codigocontabil'
    ];

    public function GuiasRecolhimento(): BelongsTo {
        return $this->belongsTo(GuiasRecolhimento::class, 'auxtiporecolhimentoid', 'id');
    }

}

