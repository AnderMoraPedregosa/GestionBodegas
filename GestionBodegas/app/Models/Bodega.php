<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $fillable = [
        'nombre', 'direccion', 'email', 'telefono', 'persona_contacto', 'anno_fundacion', 'comentarios', 'tiene_restaurante', 'tiene_hotel'
    ];


    public function vinos()
    {
        return $this->hasMany(Vino::class);
    }
}
