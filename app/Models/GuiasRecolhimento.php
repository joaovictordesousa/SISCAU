<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuxAgencia;
use App\Models\AuxInstituicaoFinanceira;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class GuiasRecolhimento extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'guiasrecolhimento';
    protected $fillable = [
        'auxtiporecolhimentoid',
        'auxinstituicaofinanceiraid',
        'auxagenciaid',
        'auxempresaid',
        'datagr',
        'datavalidade',
        'auxtipodocumentoid',
        'numero',
        'numeroconta',
        'numerocontrato',
        'aditivo',
        'valor',
        'numerodocumento',
        'numeronl',
        'historico',
        'ativo'
    ];

    public function TipoRecolhimento():BelongsTo {
        return $this->belongsTo(AuxTipoRecolhimento::class, 'auxtiporecolhimentoid', 'id');
    }

    public function Financas():BelongsTo {
        return $this->belongsTo(AuxInstituicoesFinanceiras::class, 'auxinstituicaofinanceiraid', 'id');
    }
    public function Agencias():BelongsTo {
        return $this->belongsTo(AuxAgencias::class, 'auxagenciaid', 'id');
    }
    public function Empresas():BelongsTo {
        return $this->belongsTo(AuxEmpresas::class, 'auxempresaid', 'id');
    }
    public function Documento():BelongsTo {
        return $this->belongsTo(AuxTipoDocumento::class, 'auxtipodocumentoid', 'id');
    }
}
