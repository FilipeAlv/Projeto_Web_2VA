<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
     protected $fillable = [
        'nome','dataNascimento', 'especie', 'raca', 'id_dono'
    ];
}