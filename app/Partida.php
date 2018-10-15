<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $fillable=[
        'nivel',
        'fecha',
        'tiempo',
      ];
    
      public $timestamps = false;
    
        public function puntuacions(){
          return $this->hasMany(Puntuacion::class);
        }

}
