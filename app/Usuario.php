<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=[
        'nombre',
        'usuario',
        'contrasena',
        'pais',
        'fecha_registro',
        'sobrenombre',
        'correo'
      ];
    
      public $timestamps = false;
    
        public function puntuacions(){
          return $this->hasMany(Puntuacion::class);
        }
}
