@extends('layouts.gentelella')
@section('title','ORDENES DE SERVICIO')

@section('content')
<div class="row">
    <div class="col-sm-12" id="wrap_listado">
        <div class="x_panel" >
            <div class="x_title">
                    <h2>Listado de Ordenes de Servicio</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="well">
                <a href="{{route('motores.create')}}" class="btn btn-app"><i class="fa fa-sign-in"></i> Ingresar Nuevo Equipo</a> 
             </div>
                <table class="table table-striped projects table-hover" id="motores_table">
                    <thead>
                      <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th style="width: 10%">OS</th>
                        <th style="width: 25%">Cliente</th>
                        <th>Potencia</th>
                        <th>Tecnicos Asignados</th>
                        <th>Estado</th>
                        <th style="width: 20%">#Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($motores as $motor)
                          <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>{{$motor->year}}-{{$motor->os}}</td>
                            <td>{{$motor->cliente->cliente}}</td>
                            <td>{{$motor->hp}} {{$motor->hpkw==1?"Kw":"Hp"}}</td>
                            <td> Tecnicos</td>
                            <td> Estado</td>
                            <td> 
                              <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Editar </a>
                            </td>
                          </tr>
                      @endforeach
                      {{$motores->links()}}
                    </tbody>
                </table>
            </div> {{-- END X-CONTENT --}}
        </div>
    </div>
</div>
@endsection