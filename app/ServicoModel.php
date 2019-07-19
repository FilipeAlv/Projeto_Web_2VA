<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoModel extends Model
{
     protected $fillable = [
    	'nome', 'valor'
    ];
}
