

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

	$('#select_sala').change(function(){
		cambiar_sala($('#select_sala').val());
	})


	$('.link_sala').click(function(event){
		cambiar_sala($(event.currentTarget).attr('alt'));
	})
})