<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    protected $fillable = [
        'bodega_id', 'nombre', 'tipo', 'anno', 'descripcion'
    ];

    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }
}
