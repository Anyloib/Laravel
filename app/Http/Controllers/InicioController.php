<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class InicioController extends Controller
{
    public function hola() {
        $contactos = Contacto::all();

        $argumentos = array();
        $argumentos['contactos'] = $contactos;

        return view('hola', $argumentos);
    }
}
