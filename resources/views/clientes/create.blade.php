@extends('layouts.gentelella')
@section('title','CLIENTES')

@section('content')

<div class="row justify-content-md-center">
    <div class="col-sm-8 " id="wrap_formulario">
        <div class="x_panel" >
            <div class="x_title">
                    <h2>Ingreso de Cliente</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
            <div class="x_content">
                
                
                <form action="{{route('clientes.store')}}" class="form-horizontal form-label-left input_mask" method="POST">
                  @csrf
                    <div class="form-group text-right row">
                        <label for="cliente" class="control-label col-md-3 col-sm-3 col-xs-12">Cliente:</label>
                       <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="cliente" class="form-control" placeholder="Nombre del Cliente" value="A" required>
                       </div>
                    </div>
                    <div class="form-group text-right row">
                        <label for="nit" class="control-label col-md-3 col-sm-3 col-xs-12">Nit:</label>
                       <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="nit" class="form-control" placeholder="Nit del Cliente" value="123" required>
                       </div>
                    </div>
                    <div class="form-group text-right row">
                        <label for="direccion_fiscal" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección Fiscal:</label>
                       <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="direccion_fiscal" class="form-control" value="dir" placeholder="Dirección fiscal del cliente">
                       </div>
                    </div>
                    <div class="form-group text-right row">
                        <label for="direccion_planta" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección Planta:</label>
                       <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="direccion_planta" class="form-control" value="dirP" placeholder="Direccion de ubicacion de los equipos">
                       </div>
                    </div>
                    <div class="form-group text-right row">
                        <label for="comentarios" class="control-label col-md-3 col-sm-3 col-xs-12">Comentarios sobre Cliente:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <textarea name="infoCliente" class="form-control" placeholder="Toda la informacion adicional que se requiera guardar" id="comment">
                              comentario
                           </textarea>
                        </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
						         <button class="btn btn-primary" type="reset">Reset</button>
                           <button type="submit" class="btn btn-success">Guardar Cliente</button>
                        </div>
                     </div>
                </form>
                       
                 

                
               
                {{-- <div class="form-group">
                
                <div class="form-group">
                   {{Form::label('pais','Pais:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     {{Form::text('pais','Guatemala',['class'=>'form-control','required'=>'required'])}}
                  </div>
                </div>
                <div class="form-group">
                   {{Form::label('ciudad','Ciudad:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
                  <div class="col-md-9 col-sm-9 col-xs-12">
                     {{Form::text('ciudad','Guatemala',['class'=>'form-control','required'=>'required'])}}
                  </div>
                </div>
                <div class="form-group">
                    {{Form::label('ciudad','Informacion del cliente:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12'])}}
                   <div class="col-md-9 col-sm-9 col-xs-12">
                      {{Form::textarea('infoCliente','',['class'=>'form-control','id'=>'coment','placeholder'=>'Toda la informacion adicional que se requiera guardar'])}}
                   </div>
                 </div> --}}

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

   <script src="{{asset('js/clientes/create.js')}}"> </script>
@endsection
