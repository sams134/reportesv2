$(function () { 
    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });           
    
    $('#contactoTXT').editableSelect({filter:false}).on('select.editable-select', function (e, li) {
          if (li == null)
                $('#contactohide').val($('#contactoTXT').val());
          else
                $('#contactohide').val(li.text());   
          var getRequest = '/ajax/motores/contactoSelect/'+li.val();
          
          $.get(getRequest,function(data)     
          {
                var contacto = JSON.parse(data);  
                $('#id_email').val(contacto.email);
                $("#id_telefonoTXT").val(contacto.telefono);

          });
    });
    $('#addWork').click(function(){
         $('#table_works').append("<tr><td style='width:60%'> <input type='text' name='works[]' class='form-control col-md-12' placeholder='Trabajo Especifico'> </td><td><div class='checkbox'><label><input type='checkbox' checked='checked'  class='checkTrabajo'> Cotizar<input type='hidden' name='cotizarTrabajo[]' value='1'></label></div></td> <td>  <a class='btn btn-danger' id='delWork'><i class='fa fa-minus-circle'> Eliminar </i></a></td></tr>");
    });
    $("#table_works").click(function(event){
            var element = $(event.target);
            if (event.target.nodeName == 'I' || event.target.nodeName == 'A')
                  element.closest("tr").remove();
            else
                  
            if (element.attr('type')=="checkbox")
            {
                  var num = $(event.target).next().val();
                  num = (1*num+1)%2;
                  $(event.target).next().val(num);
            }
      });
      $('#clienteSelect').change(function(){
            var getRequest = '/ajax/clienteSelect/'+$('#clienteSelect').val();
            
            $.get(getRequest,function(data)
            {
                  var contactos = JSON.parse(data);
                  $('#contactoTXT').editableSelect('clear'); 
                  for (i=0;i<contactos.length;i++)
                         $('#contactoTXT').editableSelect('add',function(){
                              $(this).val(contactos[i].id);
                              $(this).text(contactos[i].contacto);
                        });         
            });
      });   
});
Dropzone.options.myDropzone = {
      autoProcessQueue: false,
      uploadMultiple: true,
      maxFiles: 10,
      maxFilesize : 39,
      parallelUploads: 4,
      acceptedFiles: ".jpeg,.jpg,.png,.gif",
      addRemoveLinks: true, 
      headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
      
      init: function() {
            console.log('init');
          var submitBtn = document.querySelector("#submit-all");
          myDropzone = this;
          
          submitBtn.addEventListener("click", function(e){
               e.preventDefault();
               e.stopPropagation();
               
               $('#datetimepicker1 input[type=text]').css({'background-color' : '#fff', 'border':'1px solid #ccc'});
               $('#year').css({'background-color' : '#Fff', 'border':'1px solid #ccc'});
               $('#newOs').css({'background-color' : '#Fff', 'border':'1px solid #ccc'});
               $('#contactoTXT').css({'background-color' : '#Fff', 'border':'1px solid #ccc'});
               $('#id_tipoequipo').css({'background-color' : '#Fff', 'border':'1px solid #ccc'});
               var validated = true;
               var equipo = null;
               if ($('#clienteSelect').val() == 0 ){
                  validated = false;
                  alert("Falta el cliente");
               }
               
               if ($('#year').val() == "")
               {
                     validated = false;
                     $('#year').css({'background-color' : '#FAEDEC', 'border':'1px solid #E85445'});
                     alert('Falta el año');
                     equipo = equipo==null?$('#year'):equipo;
               }
               if ($('#newOs').val() == "")
               {
                     validated = false;
                     $('#newOs').css({'background-color' : '#FAEDEC', 'border':'1px solid #E85445'});
                     alert('Falta el numero de orden');
                     equipo = equipo==null?$('#newOs'):equipo;
               }

               if ($('#datetimepicker1 input[type=text]').val() == ""){
                 validated = false;
                 $('#datetimepicker1 input[type=text]').css({'background-color' : '#FAEDEC', 'border':'1px solid #E85445'});
                 equipo = equipo==null?$('#datetimepicker1 input[type=text]'):equipo;
                 alert('Falta la fecha');
               }
               
               
              
              /* if ($('#contactohide').val() == ""){
                     $('#contactoTXT').css({'background-color' : '#FAEDEC', 'border':'1px solid #E85445'});
                     validated = false;
                     alert('Falta el contacto')
                     equipo = equipo==null?$('#contactoTXT'):equipo;
              } */
              if ($('#tipoequipohide').val() == ""){
                     $('#id_tipoequipo').css({'background-color' : '#FAEDEC', 'border':'1px solid #E85445'});
                     validated = false;
                     alert('Falta el Tipo de Equipo');
                     equipo = equipo==null?$('#id_tipoequipo'):equipo;

              }
               

               if (validated){
                    // $("#my-dropzone").submit();
                     if (myDropzone.files.length > 0 )                      
                        myDropzone.processQueue();  
                     else
                       alert('Debe de cargar almenos una imagen del equipo');
                     
               }else
               {
                     $('html, body').animate({
                           scrollTop: equipo.offset().top
                     }, 1000);
               }
          });
          this.on("addedfile", function(file) {
           //   alert("file uploaded");
          });
          
          this.on("complete", function(file) {
               if (file.accepted){
               
                       var loc = window.location;
                       loc.href = loc.protocol+"//"+loc.hostname+"/motores";
                       //myDropzone.removeFile(file);
                }
          });
          this.on("processing", function() {
                this.options.autoProcessQueue = true;
         });
         

          this.on("success", function(file,response) {  myDropzone.processQueue.bind(myDropzone); console.log(response); });
          this.on("error", function(file,response){if (!file.accepted) this.removeFile(file); console.log(response)});
      }
  };