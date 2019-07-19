<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgendamentoModel extends Model
{
    protected $fillable = [
    	'pet_id', 'dataAgendada', 'horaAgendada', 'dataInicio', 'horaInicio', 'dataFim', 'horaFim', 'servico_id', 'status'  
    ];
}
