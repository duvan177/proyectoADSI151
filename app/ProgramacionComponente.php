<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramacionComponente extends Model
{
    

protected $table = 'programacionxcomponente';

protected $fillable = ['idComponent','idPerfilAlarma','EstadoProgramado'];

}
