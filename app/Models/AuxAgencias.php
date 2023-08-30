<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuxAgencias extends Model
{
    use HasFactory;

    protected $table = 'auxagencias';

    protected $fillable = [
        'auxinstituicaofinanceiraid',
        'codigo',
        'descricao'
    ];

    public function GuiasRecolhimento(): BelongsTo {
        return $this->belongsTo(GuiasRecolhimento::class, 'auxagenciaid', 'id');
    }
}
