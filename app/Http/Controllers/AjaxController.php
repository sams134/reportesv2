<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    //********
    // llamado desde la creacion de motores, devuelve datos del contacto seleccionado
    public function contactoSelect($id)
    {
        $contacto =  Contacto::find($id);
        return $contacto->toJson();
    }
}
