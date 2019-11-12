$(document).ready(function(){
	$("#Iniciar").click(function(){
		var cedper=$('#cedper').val();
		var sno_unidadadm=$('#sno_unidadadm').val();
		var cla1=$("#cla1").val();
		var cla2=$("#cla2").val();
		var id_rol=$("#id_rol").val();
		console.log(cedper,sno_unidadadm,cla1,cla2,id_rol);
		if (cedper==0) {
            alert("El campo cedula no puede estar vacio");
            return false;
        }else if (sno_unidadadm==0) {
            alert("El campo Departamento no puede estar vacio");
            return false;
        }else if (cla1==0) {
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
			url:'../includes/insert_adm.php',
			data:{cedper:cedper,sno_unidadadm:sno_unidadadm,cla1:cla1,cla2:cla2,id_rol:id_rol},
			success:function(response){
				if(response.respuesta==1){
				$("#mensaje").html(response.mensaje);
				alert('Portador de la cedula de identidad, ya posee un departamento asignado.');
				window.location='../vista/crear_administrador.php';
				}if(response.respuesta==2){
				$("#mensaje").html(response.mensaje);
				alert('Usuario existe en la base de dato.');
				window.location='../vista/crear_administrador.php';
				}if(response.respuesta==3){
				$("#mensaje").html(response.mensaje);
				alert('Se ha Registrado la cuenta.');
				window.location='../vista/crear_administrador.php';
				}else{
					$("#mensaje").html(response.mensaje);
					alert('Usuario o contraseña incorrecta.');
				}
				
			},error:function(){
				alert('Se registro satifactoriamente');
				window.location='../vista/consultar_administrador.php';
				
			}
		});
	});
});