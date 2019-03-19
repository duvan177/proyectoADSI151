<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilAlarma extends Model
{
  
    protected $table = 'perfilesyalarmas';
    protected $fillable = ['id','nombre','idUsuario'];
}
