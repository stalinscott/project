   setInterval(function(){
                       Push.create("Notificacion", {
                    body: "Este es el cuerpo de la notificacion",
                    icon: "../images/mdt.png",
                    timeout :5000,
                    vibrate: [300,300,300],
                    onClick: function (){
                        alert("click en la notificacion");
                    }
                });
            },10000)


             <br>
       <br>
         <br>
           <br>
     <button id="buttonP">Dar Permisos</button>  
<button id="buttonN">Lanzar notificación</button>
           <script>
                var btnNotificacion = document.getElementById("buttonN"),  
    btnPermiso = document.getElementById("buttonP")
    titulo = "Fili Santillán",
    opciones = {
        icon: "logo.png",
        body: "Notificación de prueba"
    };

function permiso() {  
        Notification.requestPermission();
};

function mostrarNotificacion() {  
    if(Notification) {
        if (Notification.permission == "granted") {
            var n = new Notification(titulo, opciones);
        }

        else if(Notification.permission == "default") {
            alert("Primero da los permisos de notificación");
        }

        else {
            alert("Bloqueaste los permisos de notificación");
        }
    }
};

btnPermiso.addEventListener("click", permiso);  
btnNotificacion.addEventListener("click", mostrarNotificacion);

           </script>


           <?php
                    include_once('../includes/database.php');
   
    $sql = "SELECT * FROM public.notificacion, public.personal,public.sno_unidadadm 
WHERE public.personal.cedper=public.notificacion.cedper
AND sno_unidadadm.depuniadm=notificacion.depuniadm
AND sno_unidadadm.ofiuniadm=notificacion.ofiuniadm
AND sno_unidadadm.minorguniadm=notificacion.minorguniadm
AND sno_unidadadm.uniuniadm=notificacion.uniuniadm
AND sno_unidadadm.prouniadm=notificacion.prouniadm
AND notificacion.depuniadm='$depuniadm' 
AND notificacion.ofiuniadm='$ofiuniadm'
AND notificacion.minorguniadm='$minorguniadm'
AND notificacion.uniuniadm='$uniuniadm'
AND notificacion.prouniadm='$prouniadm'
AND notificacion.status='no'
;";

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );
        echo "<ul class='dropdown-menu'><center><a onClick='location.reload(false);'><button type='button' class='btn btn-link'>Notificaciones</button></a></center>";
        // Recorrer el resource y mostrar los datos:
        while( $data= pg_fetch_object($rs)  ){
          echo "
       
                    
                    <li class='divider'></li>
                    <li><a href='#section41'>Fecha:
                    ".$data->fecha_jornada."
                    <br>
                    ".$data->dia."
                    ".$data->cedper."";
      }
      echo "
                    </a></li>
              <li class='divider'></li><center>
              <a onClick='location.reload(false);'><button type='button' class='btn btn-link'>Ver Mas</button></a></center>
            </ul> </td></tr>";
  


            ?>  
            <?php
        $temp='     <script type="text/javascript">
                Push.create("Notificacion", {
                    body: "Este es el cuerpo de la notificacion",
                    icon: "../images/mdt.png",
                    timeout :5000,
                    vibrate: [300,300,300],
                    onClick: function (){
                        window.location="../vista/asistencia_root.php";
                    window.focus();
                        this.close();
                        console.log(this);

                    }
                });



        </script>';

        if($hora>="6:27pm"){
        echo $temp;
        }else{
            echo"";
        }

        ?>



        <?php
function saber_dia($nombredia) {

$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

$fecha = $dias[date('N', strtotime($nombredia))];

echo $fecha;

}

// ejecutamos la función pasándole la fecha que queremos

saber_dia('2019-07-09');
?>