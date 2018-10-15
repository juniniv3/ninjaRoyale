<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Login extends Model
{

    protected $fillable=[
        
        'fecha',
        'Usuarios_id',
      ];
    
      public $timestamps = false;
    
      public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

}
