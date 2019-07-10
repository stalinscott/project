$(document).ready(function(){
	$("#Iniciar").click(function(){
		var Usuario=$('#usuario').val();
		var Contrasena=$("#contrasena").val();
		//console.log(Usuario,Contrasena);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'../includes/LoginAjax.php',
			data:{Usuario:Usuario,Contrasena:Contrasena},
			success:function(response){
				if(response.respuesta==1){
					$("#mensaje").html(response.mensaje);
					alert('Bienvenido...');
					window.location='../vista/index_root.php';
				}if(response.respuesta==2){
					$("#mensaje").html(response.mensaje);
					alert('Bienvenido...');
					window.location='../vista/index_talento.php';
				}if(response.respuesta==3){
					$("#mensaje").html(response.mensaje);
					alert('Bienvenido...');
					window.location='../vista/index_director.php';
				}if(response.respuesta==4){
					$("#mensaje").html(response.mensaje);
					alert('Bienvenido...');
					window.location='../vista/index_coordinador.php';
				}if(response.respuesta==5){
					$("#mensaje").html(response.mensaje);
					alert('Bienvenido...');
					window.location='../vista/index_empleado.php';
				}
				else{
					$("#mensaje").html(response.mensaje);
					alert('Usuario o contraseña incorrecta.');
				}
			},error:function(){
				
			}
		});
	});
});