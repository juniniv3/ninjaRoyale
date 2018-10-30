<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Login;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->input('usuario');
        $pass = $request->input('contrasena');
        
        $listaUsuarios = Usuario::where('usuario','=',$user)->get();
        
        $usuario = $listaUsuarios[0];

       
        if($usuario != null){

          
            if($usuario->contrasena == $pass){

                $fecha = date('Y/m/d H:i:s'); 
                $nuevoLogin = new Login;
                
                $nuevoLogin->fecha = $fecha;
                $nuevoLogin->Usuarios_id = $usuario->id;
                
                
                $nuevoLogin->save();    
                return response('Usuario Logeado', 201)
                ->header('Content-Type', 'text/plain');

            }
                    
        }else{
            return "Error al intentar iniciar sesión";
        }

        /*

       return response('Usuario Agregado Con Exito', 201)
                ->header('Content-Type', 'text/plain');


*/  return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
