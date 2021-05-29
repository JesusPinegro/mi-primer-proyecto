<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='clientes';
    protected $primaryKey='idcliente';
    public $timestamps=false;
    protected $fillable = [
       'ruc','nombre','email','direccion','estado'
    ];
}

