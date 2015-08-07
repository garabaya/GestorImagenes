<?php
/**
 * Author: Rubén Garabaya Arenas
 * Project: GestorImagenes
 * Date: 07/08/2015
 * Time: 11:12
 */

namespace GestorImagenes\Http\Controllers;


use Illuminate\Routing\Controller;

class UsuarioController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getEditarPerfil(){
        return 'mostrando formulario de editar perfil';
    }

    public function postEditarPerfil(){
        return 'editando perfil';
    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }
}