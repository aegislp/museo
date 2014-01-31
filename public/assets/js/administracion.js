function agregar_foto_galeria(){

	$('#fotos_salas').append($('<div class="form_group">').append($('<input>').attr({'type':'file','name':'archivos[]'})))
}

function borrar_imagen_sala(){
 	$.post(
		$('#parametro_sala').val(),
		{sala:$('#id_sala').val() },
		function(response){
			if(response.code == 'ok'){
				 

				$('#'+response.imagen).remove();
			}
		}
	)

}
function eliminarTrivia(event){
	var origen = $(event.currentTarget)
	 
	$('#form_trivia').attr('action',$(origen).attr('rel'));
	$('#form_trivia').append($('<input type="hidden" name="trivia" />').val($(origen).attr('id')))
	$('#form_trivia').submit();
}

$(document).ready(function(){

	tinymce.init({
    	 
    	selector: "textarea",
    	language : 'es',
 	});

	//------------------------ administracion -------------------//

 
	 
	$('#btn_objeto_nuevo,#btn_cancelar_obj').click(function(){
		$('#formulario_objeto,.objetos').toggle();
		 
	});

 	$('.thumbnail').find('.close').click(function(){ 
 		$('#parametro_sala').val($(this).attr('rel')),$.blockUI({ 'message':$('#alert_borrado') })
 	})
 	$('#btn_cancelar_borrado').click(function(){$.unblockUI()})
 	$('#btn_aceptar_borrado').click(borrar_imagen_sala)
 	$('#btn_add_foto_sala').click(agregar_foto_galeria)

 	$('.btn-activar-sala').click(function(event){
 		$.post(
 			$(event.currentTarget).attr('rel'),
 			function(response){

 				if(response.activa){
 					mensaje = 'Activada';
 					clase = 'btn btn-sm btn-primary btn-success';
 				}else{
 					mensaje = 'Desactivada';
 					clase = 'btn btn-sm btn-primary btn-danger';
 				
 				}
 				
 				$(event.currentTarget).find('span').text(mensaje)
 				$(event.currentTarget).attr('class',clase);
 			},
 			'json'

 		);
 	})
 	$('.btn-trivia').click(eliminarTrivia);

});
