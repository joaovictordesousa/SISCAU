<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baixas extends Model
{
    use HasFactory;

    protected $table = 'baixas';
    protected $fillable = [
        'guiarecolhimento',
        'processo',
        'data',
        'numeronl',
        'mensagem',
        'datamensagem'
    ];

    public function guiaRecolhimento()
    {
        return $this->belongsTo(GuiaRecolhimento::class, 'guiaderecolhimentoid');
    }
    
}
