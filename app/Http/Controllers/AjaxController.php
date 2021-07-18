<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Cliente;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    
    /**
     * Muestra los datos de un contacto
     * Llamado desde el fomulario de creacion de motores
     * 
     * @return Contacto
     */
    public function contactoSelect($id){
        $contacto =  Contacto::find($id);
        return $contacto->toJson();
    }

    /**
     * Muestra los datos de un cliente
     * Llamado desde el fomulario de creacion de motores
     * 
     * @return Cliente
     */
    public function getDataClient($id_cliente){      
        $cliente = Cliente::find($id_cliente);
        return $cliente->contactos->toJson();
}
}
