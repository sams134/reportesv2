@extends('layouts.gentelella')
@section('title',$cliente->cliente)

@section('content')

<a class="btn btn-app" href="{{route('clientes.index')}}">
    <i class="fa fa-arrow-left"></i> Ver Clientes
  </a>
<div class="row">
    <div class="col-sm-12" id="wrap_listado">
        <div class="x_panel" >
            <div class="x_title">
                    <h2>{{$cliente->cliente}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                
                <div class="well col-sm-6 col-lg-6 col-xs-12">
                    <h3 class="text-center">Datos del Cliente</h3>                          
                      <table class="table ">
                          <tr>
                                  <td>Cliente </td>
                                  <td>{!!$cliente->cliente!!}</td>
                          </tr>
                          <tr>
                                  <td>Razon Social </td>
                                  <td>{!!$cliente->infoCliente->razon_social!!}</td>
                          </tr>
                          <tr>
                                  <td>Nit</td>
                                  <td>{!!$cliente->infoCliente->nit!!}</td>
                          </tr>
                          <tr>
                                  <td>Direccion Fiscal</td>
                                  <td>{!!$cliente->infoCliente->direccion_fiscal!!}</td>
                          </tr>
                          <tr>
                                    <td>Direccion Planta</td>
                                    <td>{!!$cliente->infoCliente->direccion_planta!!}</td>
                          </tr>
                          <tr>
                                  <td>Ubicacion</td>
                                  <td>{!!$cliente->ciudad!!}, {!!$cliente->pais!!}</td>
                          </tr>                               
                      </table>
                      <div class="well">
                              <h2> Informacion del Cliente </h2>
                              {!! $cliente->infoCliente->comentarios!!}
                      </div>
                      <div>
                            <form action="{{route('clientes.destroy',$cliente->id_cliente)}}" method="POST">
                                @method('DELETE')
                                <a href="/motores/{!!$cliente->id_cliente!!}/create" class="btn btn-primary"> Agregar Equipo </a>
                                <a href="/clientes/{!!$cliente->id_cliente!!}/edit" class="btn btn-primary">Editar cliente</a>
                                
                                @if (count($cliente->motores)==0)
                                        
                                        <button type="submit" class="btn btn-danger">Borrar Cliente</button>
                                @else
                                    <br>
                                <small> *Si desea borrar el cliente primero debe de eliminar todos sus motores</small>
                                @endif 
                            </form>
                      </div>
                </div> <!-- well -->

                <div class="col-sm-6 col-lg-6 col-xs-12">
                    <div class="tile-stats col-sm-12 col-lg-12 col-xs-12">
                        <div class="icon"><i class="fa fa-folder"></i>
                        </div>
                    <div class="count">{!!count($cliente->motores)!!}</div>

                        <h3>Equipos Ingresados a reparacion</h3>
                        <p>Desde el a&ntilde;o 2019</p>
                    </div>
                    <div class="tile-stats col-sm-12 col-lg-12 col-xs-12">
                                    <div class="icon"><i class="fa fa-wrench"></i>
                                    </div>
                                <div class="count">{!!count($cliente->motores)!!}</div>
        
                                    <h3>Equipos en Proceso</h3>
                                    <p>Ordenes Activas Actualmente</p>
                                </div>
                    
                    <div class="tile-stats col-sm-12 col-lg-12 col-xs-12">
                            <h3>Tendencia de equipos recibidos</h3>
                            <h2>Promedio: 5 al mes</h2>
                            <span class="sparky" style="width:200px">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                            </span>
                     </div>
                </div> {{-- Well de estadisticas --}}

                <table class="table table-striped">
                    <thead>
                            <th width="20px"># </th>
                            <th width="20px"><input type="checkbox" name="" id="check-principal"> </th>
                            <th>OS </th>
                            <th>Potencia </th>
                            <th> Rpm </th>
                            <th> Fecha Ingreso </th>
                            <th> Edit </th>
                    </thead>
                    @if(count($cliente->motores)>0)
                       @foreach($cliente->motores_desc as $cont=>$motor)
                         <tr> 
                             <td>{{$cont+1}}</td>
                             <td> <input type="checkbox" name="check-os[]" id="" value="{{$motor->id_motor}}"></td>
                             <td><a href="/motores/{!!$motor->id_motor!!}"> {!!$motor->year!!}-{!!$motor->os!!}</a> </td>
                             <td> {!!$motor->hp!!} {{$motor->hpkw==1?"KW":"HP"}}</td>
                             <td> {!!$motor->rpm!!} </td>
                             <td>  {{strftime("%A %d de %B del %Y",strtotime($motor->fecha_ingreso))}} </td>
                             <td> </td>
                         </tr>
                        @endforeach
                    @else
                            <tr>
                            <td colspan="4"> No hay Equipos</td>
                            </tr>
                    @endif
                </table>

            </div> {{-- x-content --}}
        </div>
    </div>
</div>

@endsection