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



//-----------------admin salas-----------------------------------//
function nueva_sala(){
	$('#myModal').modal('hide')
	mostrar_espera();

	$.post(
		'',
		{form:$('#form_sala').serialize()},
		function(response){
			fin_mostrar_espera();
		}
	);
	 

}





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

	//$(document).ajaxStart(mostrar_espera).ajaxStop(fin_mostrar_espera);


	$('#select_sala').change(function(){
		cambiar_sala($('#select_sala').val());
	})


	$('.link_sala').click(function(event){
		cambiar_sala($(event.currentTarget).attr('alt'));
	})


	//------------------------ administracion -------------------//
	$('#btn_nueva_sala').click(nueva_sala);
	 
})