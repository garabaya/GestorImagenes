<?php
/**
 * Author: Rubén Garabaya Arenas
 * Project: GestorImagenes
 * Date: 07/08/2015
 * Time: 11:12
 */

namespace GestorImagenes\Http\Controllers;


class AlbumController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
        return 'mostrando albumes del usuario';
    }

    public function getCrearAlbum()
    {
        return 'formulario de crear albumes';
    }
    public function postCrearAlbum()
    {
        return 'almacenando el album en BD';
    }
    public function getActualizarAlbum()
    {
        return 'formulario de actualizar fotos';
    }
    public function postActualizarAlbum()
    {
        return 'actualizando el album en BD';
    }
    public function getEliminarAlbum()
    {
        return 'formulario de eliminar albumes';
    }
    public function postEliminarAlbum()
    {
        return 'eliminando el album en BD';
    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }
}