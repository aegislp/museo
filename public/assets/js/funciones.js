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
			$('.btn-trivia').click(ver_trivia) 
	$('.btn-juego').click(juego_objetos) 
	$('.btn_objetos').click(info_objetos) 
		$('.btn_like').click(me_gusta) 
		}
	)
 
}

function ver_trivia(event){

	$.get(
		$(event.currentTarget).attr('rel') ,
		function(response){
			$('#juegos').empty().append(response);
			$('#modal_juego').modal('show');
		}

	)
}

function info_objetos(event){

	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#detalle_objeto').empty().append(response);
			$('#modal_detalle_objeto').modal('show')
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
function me_gusta(event){
	$.get(
		$(event.currentTarget).attr('rel'),
		function(response){
			$('#juegos').empty().append(response);
			$('#modal_like').modal('show');
		}


	);
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