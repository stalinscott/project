<?php 

if (isset($_POST))
{
echo "Cedula: ";
echo $_POST["cedper"];
echo "        ";
echo "codorg: ";
echo $_POST["codorg"];
echo "        ";
echo "usuario: ";
echo $_POST["usuario"];
echo "        ";
echo "clave:  ";
echo $_POST["cla1"];
echo "        ";
echo "Rol:  ";
echo $_POST["id_rol"];
echo "        ";
echo "<br>";
echo "<br>";

}
include_once('../includes/database.php');
function insertarPersona( $conexion, $cedper, $codorg, $usuario, $cla1 , $id_rol )
	{
		$sql = "INSERT INTO public.administrador(
            cedper, codorg, usuario, clave, id_rol)
    VALUES ('$cedper', '$codorg', '$usuario', '$cla1', '$id_rol')";

		// Ejecutamos la consulta (se devolverá true o false):
		return pg_query( $conexion, $sql );
	}
$cedper = $_POST["cedper"];
$codorg = $_POST["codorg"];
$usuario = $_POST["usuario"];
$cla1 = $_POST["cla1"];
$id_rol = $_POST["id_rol"];


$consulta="SELECT administrador.usuario
  FROM public.administrador WHERE administrador.usuario='$usuario'";
	if( pg_num_rows($consulta)>0)
			{
			echo "Usuario se encuentra registrador en la base de datos, seleccione otro";
			}
			else{
			$ok = insertarPersona( $conexion, $cedper, $codorg, $usuario, $cla1,$id_rol);
			}

		