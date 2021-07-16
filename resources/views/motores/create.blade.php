@extends('layouts.gentelella')
@section('title','Nuevo Equipo')

@section('content')
    <form action="{{route('motores.store')}}" method="post" enctype="multipart/form-data" id="my-dropzone" class="form-horizontal form-label-left input_mask dropzone">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12" id="wrap_listado">
                @include('motores.inc.informacion_cliente')
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                @include('motores.inc.informacion_equipo')  
            </div> <!--columna -->
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                @include('motores.inc.inventario')  
            </div> <!--columna -->
        </div>
        <input type="hidden" name="contactohide" value="" id="contactohide">
    </form>

@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/switchery/dist/switchery.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jquery-editable-select/dist/jquery-editable-select.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iCheck/skins/flat/green.css')}}">

@endsection
@section('script')
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('vendors/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-editable-select/dist/jquery-editable-select.js')}}"></script>
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/motores/motores.create.js')}}"></script>
    
    
@endsection