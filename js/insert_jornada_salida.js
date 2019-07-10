$(document).ready(function(){
	$("#Iniciar").click(function(){
		var cedula=$('#cedula').val();
		var fecha_jornada=$('#fecha_jornada').val();
		var h_salida=$("#h_salida").val();
		var dia=$("#dia").val();
		//console.log(cedula,fecha_jornada,h_salida,dia);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'../includes/insert_jornada_salida.php',
			data:{cedula:cedula,fecha_jornada:fecha_jornada,h_salida:h_salida,dia:dia},
			success:function(response){
				if(response.respuesta==1){
					$("#mensaje").html(response.mensaje);
					alert('Usted no registro hora de entrada.');
				window.location='../vista/registrar_asistencia_empleado.php';
				}if(response.respuesta==2){
				$("#mensaje").html(response.mensaje);
				alert('Se ha Registrado su hora de salida.');
				window.location='../vista/registrar_asistencia_empleado.php';
				}else{
					$("#mensaje").html(response.mensaje);
					alert('Usted ya ha registrado su hora de Salida.');
				}
				
			},error:function(){
				alert('Se ha Registrado su hora de salida');
				
			}
		});
	});
});