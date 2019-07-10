$(document).ready(function(){
	$("#Iniciar").click(function(){
		var cedper=$('#cedper').val();
		var sno_unidadadm=$('#sno_unidadadm').val();
		var usuario=$("#usuario").val();
		var cla1=$("#cla1").val();
		var cla2=$("#cla2").val();
		var id_rol=$("#id_rol").val();
		console.log(cedper,cla1,cla2,id_rol);
		if (usuario==0) {
            alert("El campo usuario no puede estar vacio");
            return false;
        } else if (cla1==0) {
            alert("El campo contraseña no puede estar vacio");
            return false;
        }else if (cla2 ==0) {
            alert("El campo repetir contraseña no puede estar vacio");
            return false;
        } else if (cla1!= cla2) {
            alert("Las contraseñas deben coincidir");
            return false;
        }
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'../includes/insert_empleado_director.php',
			data:{cedper:cedper,cla1:cla1,cla2:cla2,id_rol:id_rol},
			success:function(response){
				if(response.respuesta==1){
					$("#mensaje").html(response.mensaje);
					alert('Se ha Registrado la cuenta.');
				window.location='../vista/consultar_empleado_director.php';
				}if(response.respuesta==2){
				$("#mensaje").html(response.mensaje);
				alert('Usuario existe en la base de dato.');
				window.location='../vista/crear_empleado_director.php';
				}else{
					$("#mensaje").html(response.mensaje);
					alert('Usuario o contraseña incorrecta.');
				}
				
			},error:function(){
				alert('Se registro satifactoriamente');
				window.location='../vista/consultar_empleado_director.php';
				
			}
		});
	});
});