function juego_objetos(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#juegos').empty().append(response);
			$('#modal_juego').modal('show');
		}

	)

}
//ventana de espera
function mostrar_espera()
{		
	//$.blockUI.timeOut(10000);
	$.blockUI({ css: { 
        border: 'none', 
        padding: '15px', 
        backgroundColor: '#000', 
        '-webkit-border-radius': '10px', 
        '-moz-border-radius': '10px', 
        opacity: .6, 
        color: '#fff' 
    } }); 
}
//saca el fondo y desbloquea  la ventana
function fin_mostrar_espera(){
    $.unblockUI();
}

 

function cambiar_sala(id_sala){
	$.post(
		'/museo/public/salas/ajax',
		{sala:id_sala},
		function (response){
			$('#contenedor_sala').empty().append(response);
			$('.btn-trivia').click(ver_trivia); 
			$('.btn-juego').click(juego_objetos); 
			$('.btn_objetos').click(info_objetos); 
			$('.btn_like').click(me_gusta);

			//cambia la navegacion
		 
			$('.breadcrumb').find('li:last').text( $('#contenedor_sala').find('.heder_sala').find('h1').text()) 
		}
	)
 
}
function evaluar_respuesta(event){
	var respuesta = $(event.currentTarget).attr('rel');
	var solucion = $('#btn_trivia').find('input').val()  ;
	var correcta = solucion == respuesta;
	$('#btn_trivia').addClass('hidden')
	$('.btn-trivia-sig').click(ver_trivia) 
	if(correcta){
		$('#correcta').removeClass('hidden')
	}else{
		$('.r_correcta').text($('#btn_trivia').find('button[rel="'+solucion+'"]').text())
		$('#incorrecta').removeClass('hidden')

	}


}
function ver_trivia(event){

	$('.modal').modal('hide')
	$.get(
		$(event.currentTarget).attr('rel') ,
		function(response){
			$('#juegos').empty().append(response);
			$('#modal_juego').modal('show');
			$('.btn-respuesta').click(evaluar_respuesta);
		}

	)
}

function info_objetos(event){

	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#detalle_objeto').empty().append(response);
			$('#modal_detalle_objeto').modal('show')
			$('.btn_like_obj').click(megusta_obj)

		}
	)
}

function ver_mensaje(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#cont_mensaje').empty().append(response);
			$('#modal_msj').modal('show')
			$(event.currentTarget).attr('class','')
		}


	);
}
function megusta_obj(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			
			$('.btn_like_obj').empty().text(":) Te gusta");
		}


	);
}

function me_gusta(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#juegos').empty().append(response);
			$('#modal_like').modal('show');
		}


	);
}
function audio(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#cont_audio').empty().append(response)
			$('#modal_audio').modal('show');
			$('#btn_cerrar_guia').click(cerrar_guia) 
			$("#jquery_jplayer_1").jPlayer('play');
			var clase = $(event.currentTarget).parent().parent().attr('class'); 
			$(event.currentTarget).parent().parent().attr('class',clase.replace('nav','visitado') ); 
		}
	)
}
function cerrar_guia(event){
 
	$('#modal_audio').modal('hide') ;
	$("#jquery_jplayer_1").jPlayer('stop');
			 
}
function getLogin(event){

	event.preventDefault() 
	$.get(
		$(event.currentTarget).attr('rel') ,
		function(response){
			$('#detalle_objeto').empty().append(response);
			$('#modal_login').modal('show');
			 
		}

	)
}
$(document).ready(function(){

	$(document).ajaxStart(mostrar_espera).ajaxStop(fin_mostrar_espera);
	

	$('#select_sala').change(function(){
		cambiar_sala($('#select_sala').val());
	})


	$('.link_sala').click(function(event){
		cambiar_sala($(event.currentTarget).attr('alt'));
	})


	$('.btn-trivia').click(ver_trivia) 
	$('.btn-juego').click(juego_objetos) 
	$('.btn_objetos').click(info_objetos) 
	$('.btn_like').click(me_gusta) 
	$('.btn_audio').click(audio) 
	$('.btn_login').click(getLogin) 
	

	$('#tabla_mensajes').find('tr').click(ver_mensaje);
	 
    $('#form_registro').validate({
        rules :{
            email : {
                required : true,
                email    : true
            },
            usuario : {
                required : true,
                minlength : 3,
                maxlength : 14
            },
            password : {
                required : true,
                minlength : 4,
                maxlength : 9
            }

        },
        messages : {
            email : {
                required : "Debe ingresar el email",
                email    : "Debe ingresar un email valido"
            },
            usuario : {
                required : "Debe ingresar un nombre",
                minlength : "EL nombre debe tener un minimo de 3 caracteres",
                maxlength : "EL nombre debe tener un maximo de 9 caracteres"
            }
        }
    });    
 
	
})