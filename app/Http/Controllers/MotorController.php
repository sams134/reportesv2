<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $motores = Motor::select('id_motor','year','os','id_cliente','hp','hpkw')->orderBy('year','desc')->orderBy('os','desc')->paginate(200);
        return view('motores.index',compact('motores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_cliente = 0)
    {
        // busqueda de nueva OS
        $year = Motor::select('year')->max('year');
        $os = Motor::where('year','=',$year)->max('os');
        $newos = intval($os)+1;
        $newos = str_pad($newos, 4, '0', STR_PAD_LEFT);


        $clientes = Cliente::select('id_cliente','cliente')->orderBy('cliente')->get();
        $selectedCustomer = Cliente::find($id_cliente);
       
        return view('motores.create',
                            [
                                'clientes'=>$clientes,
                                'selectedClient' => $selectedCustomer,
                                'id_cliente' => $id_cliente,
                                'newYear'=>$year,
                                'newOs'=>$newos 
                            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $motor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $motor)
    {
        //
    }
}
