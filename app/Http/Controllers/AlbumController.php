<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AlbumController extends Controller 
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
        return 'Mostrando Albumes de Foto';
    }

    public function getCrear()
    {
        return 'Mostrando Formulario de Creación de Albúm';
    }

    public function postCrear()
    {
        return 'Almacenando Albúm en DB';
    }

    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualización de Albúm';
    }

    public function postActualizar()
    {
        return 'Actualización de Album';
    }

    public function postEliminar()
    {
        return 'Eliminando Albúm';
    }

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}