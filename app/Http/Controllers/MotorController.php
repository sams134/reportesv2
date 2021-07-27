<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\InfoMotor;
use App\Models\Inventario;
use App\Models\Motor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        //
        $motores = Motor::select('id_motor','year','os','id_cliente','hp','hpkw')->orderBy('year','desc')->orderBy('os','desc')->paginate(200);
        return view('motores.index',compact('motores'));
    }
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
    public function store(Request $request)
    {
        //
        $motor = Motor::create([
            'year' => $request->year,'os' => $request->os,
            'hp' => $request->hp ,'hpkw' => ($request->reales=="on")?1:0,
            'serie' => $request->serie,'modelo' => $request->modelo,
            'marca' => $request->marca,'rpm' => $request->rpm ,
            'volts' => $request->voltaje ,'amps' => $request->amperajes,
            'frame' => $request->frame,'pf' => $request->pf ,'eff' => $request->eff,
            'id_tipoequipo' => $request->id_tipoequipo,
            'fecha_ingreso' => Carbon::createFromFormat('d/m/Y', $request->dateIngreso)->toDateString(),
            'acdc' => $request->acdc=="on"?"1":"0",
            'id_enclosure' => $request->id_enclosure,
            'id_cliente' => $request->id_cliente,
            'comentarios' => $request->trabajoARealizar,'recibido' => 1,
            'hz' => $request->hz ,'phases'=>$request->phases
        ]);
        $infoMotor = InfoMotor::create([
            'id_motor' => $motor->id_motor, 'emergencia' => $request->emergencia, 
            'nombre_equipo' => $request->equipment,'contacto' => $request->contactoTXT,
            'telefono' => $request->telefono,'email' => $request->email,'cotizar' => ($request->cotizar=="on")?1:0,
            'aplicacion' => $request->aplicacion,'reales' =>($request->reales=="on")?1:0,
            'enviar_os' => ($request->enviar_os=="on")?1:0,
            'enviar_progreso' => 1,'horas_operacion' => 8
        ]);
        Inventario::create([
                'id_motor' => $motor->id_motor,'acople' =>$request->iCheckAcopple,
                'caja_conexiones' =>$request->iCheckCaja,'tapa_caja' =>$request->iCheckTapa,
                'difusor' =>$request->iCheckDifusor,'ventilador' =>$request->iCheckVentilador,
                'bornera' =>$request->iCheckBornera,'cunia' =>$request->iCheckCuna,
                'graseras' =>$request->iCheckGrasera,'cancamo' =>$request->iCheckCancamo,
                'placa' =>$request->iCheckPlaca,'tornillos' =>$request->iCheckTornillos,
                'capacitor' =>$request->iCheckCapacitores,'comentarios' =>$request->comentInventario,
        ]);
        
        return $infoMotor;
    }
    public function show(Motor $motor)
    {
        //
    }
    public function edit(Motor $motor)
    {
        //
    }
    public function update(Request $request, Motor $motor)
    {
        //
    }
    public function destroy(Motor $motor)
    {
        //
    }
}
