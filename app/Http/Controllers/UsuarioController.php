<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller 
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'Mostrando Perfil de Usuario';
    }

    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualización de Usuario';
    }

    public function postActualizar()
    {
        return 'Actualizando de Usuario';
    }
    
    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}