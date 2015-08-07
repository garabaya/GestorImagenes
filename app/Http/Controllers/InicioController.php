<?php
/**
 * Author: Rubén Garabaya Arenas
 * Project: GestorImagenes
 * Date: 07/08/2015
 * Time: 11:09
 */

namespace GestorImagenes\Http\Controllers;



class InicioController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return 'pagina de inicio validado';
    }
    public function missingMethod($parameters = array())
    {
        abort(404);
    }
}