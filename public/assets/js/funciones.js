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
$(document).ready(function(){

	$(document).ajaxStart(mostrar_espera).ajaxStop(fin_mostrar_espera);
	

	$('#select_sala').change(function(){
		cambiar_sala($('#select_sala').val());
	})


	$('.link_sala').click(function(event){
		cambiar_sala($(event.currentTarget).attr('alt'));
	})


	$('.btn-trivia').click(ver_trivia) 
})