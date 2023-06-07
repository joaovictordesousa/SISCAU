<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baixas extends Model
{
    use HasFactory;

    protected $fillable = [
        'guiarecolhimento',
        'processo',
        'data',
        'numeronl',
        'mensagem',
        'datamensagem',
    ];

}
