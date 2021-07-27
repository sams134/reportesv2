<div class="x_panel">
    <div class="x_title">
          <h2>Informacion del Equipo<small>Ingrese datos del equipo</small></h2>
          <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
    </div> <!--x title -->
    <div class="x_content">
        <div class="form-group row">
            <label for="equiolbl" class="control-label col-md-3 col-sm-3 col-xs-12"> Equipo:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <select name="id_tipoequipo" class="form-control text-uppercase" id="id_tipoequipo">
                    <optgroup>
                    <option value="1" selected>Motor</option>
                    <option value="2">Estator</option>
                    <option value="3">Rotor</option>
                    <option value="4">Moto-Reductor</option>
                    <option value="5">Generador</option>
                    <option value="6">Soldadora</option>
                    <option value="7">Transformador</option>
                    <option value="8">Compresor de Refrigeraci&oacute;n</option>
                    <option value="9">Compresor de Aire</option>
                    <option value="10">Bomba Centrifuga</option>
                    <option value="11">Bomba Desplazamiento Positivo</option>
                    <option value="12">Bomba Sumergible</option>
                    <option value="13">Ventilador</option>
                    <option value="14">Bobina</option>
                    <option value="15">Parte Mecanica</option>
                </optgroup>
                </select>                        
            </div><!--columna -->
         </div><!--form group -->
         <div class="form-group row">
            <label for="arealbl" class="control-label col-md-3 col-sm-3 col-xs-12"> Nombre o Area de Equipo:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">                  
                <input type="text" name="equipment" value="Area" class="form-control text-uppercase input-sm" placeholder="Nombre Equipo-Area (i.e. Bomba Alimentacion - Calderas)">
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="Marcalbl" class="control-label col-md-3 col-sm-3 col-xs-12">Marca:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">             
                <input type="text" name="marca" value="weg" class="form-control text-uppercase" placeholder="Marca">                        
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="Aplicacionlbl" class="control-label col-md-3 col-sm-3 col-xs-12'">Aplicaci&oacute;n:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <input type="text" name="aplicacion" value="bomba" class="form-control text-uppercase" placeholder="(Moto-reductor, Bomba, Ventilador, Molino, etc)">                      
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">            
            <label for="potencialbl" class="control-label col-md-3 col-sm-3 col-xs-12'">Potencia:</label>
            <div class="col-md-4 col-sm-4 col-xs-12">             
                <input type="text" name="hp" value="100" class="form-control" placeholder="HP/KW">
            </div><!--columna -->
            <div class="col-md-5 col-sm-5 col-xs-12">                        
               Aproximados <input name="reales" type="checkbox" class="js-switch"  checked/>  Reales 
            </div><!--columna -->                                   
         </div><!--form group -->
         <div class="form-group row">            
            <label for="hpkwlbl" class="control-label col-md-3 col-sm-3 col-xs-12">HP / KW</label>
             <div class="col-md-3 col-sm-3 col-xs-6">
                       KW <input name="hpkw" type="checkbox" class="js-switch"  checked/> HP                         
             </div> <!--columna -->                                                    
        </div><!--form group -->
        <div class="form-group row">
            <label for="acdclbl" class="control-label col-md-3 col-sm-3 col-xs-12">AC / DC:</label>
             <div class="col-md-3 col-sm-3 col-xs-6">
                      AC <input name="acdc" type="checkbox" class="js-switch"  /> DC                         
             </div> <!--columna -->                                                    
        </div><!--form group -->
        <div class="form-group row">
            <label for="rpmlbl" class="control-label col-md-3 col-sm-3 col-xs-12">Rpm:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <input type="text" name="rpm" value="1780" class="form-control" placeholder="Rpm">                  
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="serielbl" class="control-label col-md-3 col-sm-3 col-xs-12">Num. Serie:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <input type="text" name="serie" value="serie" class="form-control text-uppercase" placeholder="No. Serie">                         
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="modelolbl" class="control-label col-md-3 col-sm-3 col-xs-12">Num. de Modelo:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <input type="text" name="modelo" value="modelo" class="form-control text-uppercase" placeholder="Modelo">
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="voltajelbl" class="control-label col-md-3 col-sm-3 col-xs-12">Voltaje(s):</label>
            <div class="col-md-9 col-sm-9 col-xs-12">   
                <input type="text" name="voltaje" value="230" class="form-control text-uppercase" placeholder="230/460">                       
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
                <label for="amperajeslbl" class="control-label col-md-3 col-sm-3 col-xs-12">Amperajes(s):</label>
                <div class="col-md-9 col-sm-9 col-xs-12">    
                    <input type="text" name="amperajes" value="23" class="form-control text-uppercase" placeholder="Amps">                     
                </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
                <label for="framelbl" class="control-label col-md-3 col-sm-3 col-xs-12">Frame:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">  
                    <input type="text" name="frame" value="frame" class="form-control text-uppercase" placeholder="frame">                         
                </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
                <label for="frecuencialbl" class="control-label col-md-3 col-sm-3 col-xs-12">Frecuencia:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">     
                    <input type="text" name="hz" value="60" class="form-control text-uppercase" placeholder="Hz">                     
                </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
                <label for="pflbl" class="control-label col-md-3 col-sm-3 col-xs-12">Factor de Potencia:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">  
                    <input type="text" name="pf" value="0.88" class="form-control text-uppercase" placeholder="pf">                         
                </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="efflbl" class="control-label col-md-3 col-sm-3 col-xs-12">Eficiencia:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">                           
                <input type="text" name="eff" value="0.91" class="form-control text-uppercase" placeholder="Nom. Eff">
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="enclbl" class="control-label col-md-3 col-sm-3 col-xs-12">Enlosure:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <select class="form-control" name="id_enclosure">
                            <option value="1">TEFC</option>
                            <option value="2">OPEN</option>
                            <option value="3">WPI</option>
                            <option value="4">WPII</option>
                            <option value="5">TEAAC</option>
                            <option value="6">TENV</option>
                            <option value="7">TEAO</option>
                            <option value="8">N/A</option>
                </select>
            </div><!--columna -->
        </div><!--form group -->
        <div class="form-group row">
            <label for="faseslbl" class="control-label col-md-3 col-sm-3 col-xs-12">Fases:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">  
                <select class="form-control" name="phases">
                            <option value="0">N/A</option>
                            <option value="1">Mono-Fásico</option>
                            <option value="3" selected>Tri-Fásico</option>
                </select>
            </div><!--columna -->
        </div><!--form group -->
    </div>
</div>