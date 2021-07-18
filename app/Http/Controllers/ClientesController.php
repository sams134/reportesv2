<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\InfoCliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        //        
        $clientes = Cliente::orderBy('cliente')->paginate(100);
        return view('clientes.index',['title'=>'Clientes','clientes'=>$clientes]);
    }
    public function create()
    {
        //
        return view('clientes.create',['title'=>'Clientes']);
    }
    public function store(Request $request)
    {
        $newCustomer = Cliente::create(['cliente'=>$request->cliente]);
        InfoCliente::create([
            'nit' => $request->nit,
            'razon_social' => $request->razon_social,
            'direccion_fiscal' => $request->direccion_fiscal,
            'direccion_planta' => $request->direccion_planta,
            'comentarios' => $request->comentarios,
            'id_cliente' => $newCustomer->id_cliente
        ]);
        return redirect()->route('clientes.index')->with('success','Cliente '.$newCustomer->cliente.' Agregado No: '.$newCustomer->id_cliente);
    }
    public function show($id)
    {
        //
        $cliente = Cliente::find($id);
        setlocale(LC_ALL,"es_ES");
        return view('clientes.show',compact('cliente'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function findLike(Request $request)
    {
        
        $posiblesClientes = Cliente::where('cliente','LIKE','%'.$request->cliente.'%')->get();
        return $posiblesClientes;

    }
}
