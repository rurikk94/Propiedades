function cargar_localidad(campo_origen, campo_destino, tipolocal, numbienes){
	var idst = $("#"+campo_origen).val();
	var request = $.ajax({
	  type: "POST",
	  url: "localidad-listar_localidades.htm",
	  dataType: "json",
	  beforeSend: function(){
		  $('#'+campo_destino).removeAttr('disabled');
	  	$('#'+campo_destino).empty().append('<option value="0">Cargando...</option>').hide().show();
	  },
	  success: function(resp){
		  if(resp.num==0){
			  $('#'+campo_destino).attr('disabled','disabled');
			  $('#'+campo_destino).empty().append('<option value="">Todos</option>').hide().show();
		  }
	  	else {
			  $('#' + campo_destino).empty().append('<option value="0">Seleccionar</option>').hide().show();
			  for (i = 0; i < resp.num; i++) {
				  value = resp.id[i];
				  text = resp.nombre[i];
				  if ( tipolocal == "zonas") {
					  nbien = resp.numBienes[i];
					  $('#' + campo_destino).append('<option value="' + value + '">' + text + ' (' + nbien + ') ' + '</option>').hide().show();
				  } else {
					  $('#' + campo_destino).append('<option value="' + value + '">' + text + '</option>').hide().show();
				  }
			  }
		  }
		tipo_inmueble( campo_origen , idst, true);
		try{
      $.uniform.update("#"+campo_destino);
    }catch(e){
    }

    try{
      $("#"+campo_destino).selectpicker('refresh');
		}catch(e){
		}
	  },
	  data: { tipo : tipolocal , idd : idst, nbienes : numbienes }
	});
}


function cargar_mi_localidad(campo_origen, campo_destino, tipolocal) {
    var idst = $("#"+campo_origen).val();
    
    var request = $.ajax({
        type: "POST",
        url: "localidad-listar_mis_localidades.htm",
        beforeSend: function() {
            $('#'+campo_destino).empty().append('<option value="">Cargando...</option>').hide().show();
        },
        success: function(resp) {
            $('#'+campo_destino).empty().append('<option value="">Seleccionar</option>').hide().show();
            $('#'+campo_destino).append(resp).hide().show();
			if(campo_origen == 'pais'){
				$('#ciudades').empty().append('<option value="">Seleccionar</option>').hide().show();
				$('#zonas').empty().append('<option value="">Seleccionar</option>').hide().show();
			}
        },
        data: { tipo : tipolocal , idd : idst }
    });

	return request;
}

function localidades(campo_origen, campo_destino, tipolocal, success){
	var idst = $("#"+campo_origen).val();
	var request = $.ajax({
	  type: "POST",
	  url: "localidad-listar_localidades.htm",
	  dataType: "json",
	  beforeSend: function(){
	  	$('#'+campo_destino).empty().append('<option value="">Cargando...</option>').hide().show();
	  },
	  success: function(resp){
	  	$('#'+campo_destino).empty().append('<option value="">Seleccionar</option>').hide().show();
	  	for(i=0;i<resp.num;i++){
			value = resp.id[i];
			text = resp.nombre[i];
			$('#'+campo_destino).append('<option value="'+value+'">'+text+'</option>').hide().show();
		}
		if($("#"+campo_destino).hasClass('selectpicker'))
			$("#"+campo_destino).selectpicker('refresh');
          
          success = success || false;
		  if (success)
              success();
	  },
	  data: { tipo : tipolocal , idd : idst }
	});
	return request;
}

function limpiar_select(selector) {
	$(selector).empty().append('<option value="">Seleccionar</option>').hide().show();
}


function localidadtotal(campo_origen, campo_destino, tipolocal){
	var idst = $("#"+campo_origen).val();
	objSelect = document.getElementById(campo_destino);
	var request = $.ajax({
	  type: "POST",
	  url: "localidad-localidades.htm",
	  dataType: "json",
	  success: function(resp){
	  	objSelect.options.length = 1; 
	  	for(i=0;i<resp.num;i++){
			value = resp.id[i];
			text = resp.nombre[i];
			$('#'+campo_destino).append('<option value="'+value+'">'+text+'</option>').hide().show();
		}
		tipo_inmueble( campo_origen , idst ,false);
		
	  },
	  data: { tipo : tipolocal , idd : idst }
	});
}

function localidad_red(campo_origen, campo_destino, tipolocal){
	var idst = $("#"+campo_origen).val();
	objSelect = document.getElementById(campo_destino);
	var request = $.ajax({
	  type: "POST",
	  url: "localidad-localidades_red.htm",
	  dataType: "json",
	  success: function(resp){
	  	objSelect.options.length = 1; 
	  	for(i=0;i<resp.num;i++){
			value = resp.id[i];
			text = resp.nombre[i];
			$('#'+campo_destino).append('<option value="'+value+'">'+text+'</option>').hide().show();
		}
		  if(campo_origen == 'pais'){
			  $('#ciudades').empty().append('<option value="">Seleccionar</option>').hide().show();
		  }
		
		try{
			$.uniform.update("#"+campo_destino);
		}catch(e){

		}
	  },
	  data: { tipo : tipolocal , idd : idst, allCompanies:false}
	});
	return request;
}

function localidad_aliados(campo_origen, campo_destino, tipolocal){
    var idst = $("#"+campo_origen).val();
    objSelect = document.getElementById(campo_destino);
    var request = $.ajax({
        type: "POST",
        url: "localidad-localidades_aliados.htm",
        dataType: "json",
        success: function(resp){
            objSelect.options.length = 1; 
            for(i=0;i<resp.num;i++){
                value = resp.id[i];
                text = resp.nombre[i];
                $('#'+campo_destino).append('<option value="'+value+'">'+text+'</option>').hide().show();
            }
            try{
                    $.uniform.update("#"+campo_destino);
            }catch(e){}
        },
        data: { tipo : tipolocal , idd : idst}
    });
}


function ultimoSelect(campo_origen,update){
	var idst = $("#"+campo_origen).val();
	tipo_inmueble(campo_origen,idst,update);
	
}

function tipo_inmueble(campo_origen,  idst, update){
    if(idst == 0){
        if(campo_origen == 'zonas') {
            idst = $('#ciudades').val();
            campo_origen = 'ciudades';
        } else

        if(campo_origen == 'ciudades') {
            idst = $('#estados').val();
            campo_origen = 'estados';
        }

        if(campo_origen == 'estados') {
            idst = $('#pais').val();
                campo_origen = 'pais';
            }

        if(campo_origen == 'pais'){
            idst = 0;
            campo_origen = '';
        }

    }
	
    $('#tipo_inmueble').empty().append('<option value="0">Todos</option>');
    $.post('localidad-generar_tipo_inmueble.htm',{campo_origen : campo_origen ,  idd : idst},
        function(data){
            $('#tipo_inmueble').append(data);
            if(update == true)
                try{
                    $.uniform.update("#tipo_inmueble");
                }catch(e){}

			try{
				$("#tipo_inmueble").trigger("chosen:updated");
			}catch(e){}

			try{
				$("#tipo_inmueble").selectpicker('refresh');
			}catch(e){
			}
    });
}

function cargar_localidad_chosen(campo_origen, campo_destino, tipolocal, numbienes){
	var idst = $("#"+campo_origen).val();
	var request = $.ajax({
		type: "POST",
		url: "localidad-listar_localidades.htm",
		dataType: "json",
		beforeSend: function(){
			$('#'+campo_destino).removeAttr('disabled');
		},
		success: function(resp){
			if(resp.num==0){
				$('#'+campo_destino).attr('disabled','disabled');
				$('#'+campo_destino).empty().append('<option value="">Todos</option>');
			}
			else {
				$('#' + campo_destino).empty().append('<option value="0">Seleccionar</option>');
				for (i = 0; i < resp.num; i++) {
					value = resp.id[i];
					text = resp.nombre[i];
					$('#' + campo_destino).append('<option value="' + value + '">' + text + '</option>');
				}
			}
			tipo_inmueble( campo_origen , idst, true);
			$("#"+campo_destino).trigger("chosen:updated");
		},
		data: { tipo : tipolocal , idd : idst, nbienes : numbienes }
	});
}