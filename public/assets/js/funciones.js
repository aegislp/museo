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



//-----------------admin objetos-----------------------------------//
 



//--------------------------------------------------------------//

function cambiar_sala(id_sala){
	$.post(
		'/museo/public/salas/ajax',
		{sala:id_sala},
		function (response){
			$('#contenedor_sala').empty().append(response);
		}
	)
 
}
$(document).ready(function(){

	$(document).ajaxStart(mostrar_espera).ajaxStop(fin_mostrar_espera);
	tinymce.init({
    	 
    	selector: "textarea",
    	language : 'es',
 	});

	$('#select_sala').change(function(){
		cambiar_sala($('#select_sala').val());
	})


	$('.link_sala').click(function(event){
		cambiar_sala($(event.currentTarget).attr('alt'));
	})


	//------------------------ administracion -------------------//
	$('#btn_sala_nueva,#cancelar_btn').click(function(){
		$('#formulario_sala,#tabla_salas').toggle();
		 
	});
	
	 
	$('#btn_objeto_nuevo,#btn_cancelar_obj').click(function(){
		$('#formulario_objeto,.objetos').toggle();
		 
	});

 
 
 
})