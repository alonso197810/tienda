<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $fillable = [
        'cantidad',
        'producto_id',
    ];
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
