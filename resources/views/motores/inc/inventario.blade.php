<div class="x_panel">
    <div class="x_title">
          <h2>Inventario de Ingreso<small>Conteo Inicial de partes</small></h2>
          <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
    </div> <!--x title -->
    <div class="x_content">
        <div class="form-group row">
            <label for="acoplelbl" class="control-label col-md-4 col-sm-4 col-xs-12">Acople o polea:</label>
            <div class="col-md-8 col-sm-8 col-xs-12">  
`                <div>
                         <input type="radio" class="flat"  name="iCheckAcopple"  value="1"> Si (buen estado)
                  </div>
                  <div>
                         <input type="radio" class="flat" name="iCheckAcopple"  value="2"> Si (Mal estado)
                  </div> 
                  <div >
                         <input type="radio" class="flat" checked="" name="iCheckAcopple"  value="3"> No
                  </div>
            </div><!--columna -->
        </div><!--form group -->
        <div class="clearfix"></div>
        <div class="form-group row">
            <label for="cajalbl" class="control-label col-md-4 col-sm-4 col-xs-12">Caja de Conexiones:</label>
            <div class="col-md-8 col-sm-8 col-xs-12">  
                <div>
                        <input type="radio" class="flat"  name="iCheckCaja"  value="1"> Si (buen estado)
                </div>
                <div>
                        <input type="radio" class="flat" name="iCheckCaja"  value="2"> Si (Mal estado)
                </div> 
                <div>
                        <input type="radio" class="flat" checked="" name="iCheckCaja"  value="3"> No
                </div>
            </div><!--columna -->
        </div><!--form group -->
    </div> {{-- x-content --}}
</div> {{-- x-panel --}}
 