<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
    ];
    public function detalles()
    {
        return $this->hasMany('App\Detalle');
    }
}
