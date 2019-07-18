<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $fillable = [
    	'nome', 'categoria', 'marca', 'dataFabricacao', 'dataValidade', 'quantidade', 'valor'
    ];
}
