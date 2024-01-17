$(function(){
    $.ajax({
        // la URL para la petición
        url : '/api/persona/ConsultarProfesionales',
    
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        //data : { id : 123 },
    
        // especifica si será una petición POST o GET
        type : 'GET',
    
        // el tipo de información que se espera de respuesta
        dataType : 'json',
    
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
            setTimeout(function(){
                var id = $("#profesionalid").val();
                $.each(json,function(key, value)
                {
                    $("#profesionalid").append('<option ' + (id == value.id ? 'selected' : '') + ' value=' + value.id + '>' + value.nombres + " " + value.apellidos + '</option>');
                });
            }, 1000);
        },
    
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {
            //alert('Petición realizada');
        }
    });

    $.ajax({
        // la URL para la petición
        url : '/api/persona/ConsultarPacientes',
    
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        //data : { id : 123 },
    
        // especifica si será una petición POST o GET
        type : 'GET',
    
        // el tipo de información que se espera de respuesta
        dataType : 'json',
    
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
            $.each(json,function(key, value)
            {
                $("#pacienteid").append('<option value=' + value.id + '>' + value.nombres + " " + value.apellidos + '</option>');
            });
        },
    
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
    
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {
            //alert('Petición realizada');
        }
    });

    $.ajax({
        // la URL para la petición
        url : '/api/agenda/ConsultarAgendas',
        type : 'GET',
        dataType : 'json',
        success : function(json) {
            $.each(json,function(key, value)
            {
                $("#agendaid").append('<option value=' + value.id + '>' + value.descripcion_cita + " " + value.fecha + " - " + value.hora_inicio + '</option>');
            });
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
        complete : function(xhr, status) {
        }
    });

    $.ajax({
        // la URL para la petición
        url : '/api/antecedente/ConsultarAntecedentes',
        type : 'GET',
        dataType : 'json',
        success : function(json) {
            $.each(json,function(key, value)
            {
                $("#antecedenteid").append('<option value=' + value.id + '>' + value.paciente.nombres + " " + value.paciente.apellidos + '</option>');
            });
        },
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },
        complete : function(xhr, status) {
        }
    });
});