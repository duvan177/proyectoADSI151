<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilesAlarmas extends Model
{
    protected $table = 'perfilesyalarmas';

    protected $fillable = ['id','nombre','idUsuario'];
}
