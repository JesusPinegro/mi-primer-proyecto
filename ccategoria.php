<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ccategoria extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'descripcion', 'estado',
    ];
}
