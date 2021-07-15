@extends('layouts.gentelella')
@section('title','CLIENTES')

@section('content')
 
<div class="row">
    <div class="col-md-8 col-sm-12" id="wrap_herramientas">
        <div class="x_panel" >
            <div class="x_title">
                    <h2>Herramientas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-6 col-sm-6">
                    <button type="button" class="btn btn-secondary float-left">Nuevo Cliente</button>
         
                    <button type="button" class="btn btn-secondary">Nuevo Contacto</button>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Busca Cliente...">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12" id="wrap_listado">
        <div class="x_panel" >
            <div class="x_title">
                    <h2>Listado Clientes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped">
                    <thead >
                        <tr>
                            <th width="20px">#</th>
                            <th class="text-left">Cliente</th>
                            <th width="auto" class="d-sm-none d-md-block">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cont=>$cliente)
                            <tr>
                                <td>
                                  {{($clientes->currentPage()-1)*100+$cont+1}}
                                    
                                   
                                <td>

                                    <a href="{{route('clientes.show',$cliente->id_cliente)}}">
                                        {{$cliente->cliente}} 
                                    </a>
                                </td>
                                <td class="d-sm-none d-md-block">
                                    <a href="" class="btn btn-sm btn-primary">Ver Motores</a>
                                    <a href="{{route('motores.create_with_cliente',$cliente->id_cliente)}}" class="btn btn-sm btn-success">Agregar Motor</a>
                                    <a href="" class="btn btn-sm btn-danger">Eliminar Cliente</a>
                                </td>
                            </tr>    
                        @endforeach
                        {{$clientes->links()}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  
    
@endsection 