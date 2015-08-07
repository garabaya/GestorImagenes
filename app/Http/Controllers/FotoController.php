<?php
/**
 * Author: Rubén Garabaya Arenas
 * Project: GestorImagenes
 * Date: 07/08/2015
 * Time: 11:12
 */

namespace GestorImagenes\Http\Controllers;


class FotoController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
        return 'mostrando fotos del usuario';
    }

    public function getCrearFoto()
    {
        return 'formulario de crear fotos';
    }
    public function postCrearFoto()
    {
        return 'almacenando la foto en BD';
    }
    public function getActualizarFoto()
    {
        return 'formulario de actualizar fotos';
    }
    public function postActualizarFoto()
    {
        return 'actualizando la foto en BD';
    }
    public function getEliminarFoto()
    {
        return 'formulario de eliminar fotos';
    }
    public function postEliminarFoto()
    {
        return 'eliminando la foto en BD';
    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }
}