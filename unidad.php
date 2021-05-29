<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    protected $table='unidades';
    protected $primaryKey='idunidad';
    public $timestamps=false;
    protected $fillable = [
       'descripcion','estado'
    ];

}
