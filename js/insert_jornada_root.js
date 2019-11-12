$(document).ready(function(){
	$("#Iniciar").click(function(){
		var cedula=$('#cedula').val();
		var fecha_jornada=$('#fecha_jornada').val();
		var h_entrada=$("#h_entrada").val();
		var dia=$("#dia").val();
		var sno_unidadadm=$("#sno_unidadadm").val();
		console.log(cedula,fecha_jornada,h_entrada);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'../includes/insert_jornada_root.php',
			data:{cedula:cedula,fecha_jornada:fecha_jornada,h_entrada:h_entrada,dia:dia,sno_unidadadm:sno_unidadadm},
			success:function(response){
				if(response.respuesta==1){
					$("#mensaje").html(response.mensaje);
					alert('Se ha Registrado su asistencia.');
				window.location='../vista/registrar_asistencia_administrador.php';
				}if(response.respuesta==2){
				$("#mensaje").html(response.mensaje);
				alert('Usted ya ha registrado su hora de entrada.');
				window.location='../vista/registrar_asistencia_administrador.php';
				}else{
					$("#mensaje").html(response.mensaje);
					alert('Usuario o contraseña incorrecta.');
				}
				
			},error:function(){
				alert('Se ha Registrado su hora de entrada');
				
			}
		});
	});
});