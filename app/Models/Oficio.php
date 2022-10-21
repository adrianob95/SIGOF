<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeracao',
        'ano',
        'data',
        'cidade',
        'situacao',
        'assunto',        
        
        'conteudo',
        'destinatario',
        
        'tratamento',
        'cargodestino',
        'localdestino',
    ];
}
    