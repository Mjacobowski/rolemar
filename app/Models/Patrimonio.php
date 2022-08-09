<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'ativo','categoria','descricao','data','fornecedor',
        'valor','parcelas','baixa','motivo',
    ];

}
