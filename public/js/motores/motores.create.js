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
});