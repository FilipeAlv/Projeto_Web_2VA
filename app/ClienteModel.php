<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
     protected $fillable = [
        'nome', 'sobrenome', 'cpf', 'rg', 'dataNascimento', 'endereco', 'cidade', 'estado'
    ];

}
