<b>Fecha: </b>
	 <select name="dia" size="1">
       <?php
           $separa=explode('-',$lafecha);
           $anio=$separa[0];
           $mes=$separa[1];
           $dia=$separa[2];
           $dias_mes =array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
           for($i=0; $i < count( $dias_mes ); $i++)
           {
               echo "<option value='".$dias_mes[$i]."' ";
               if( $dias_mes[$i] == $dia )
               {
                   echo " selected ";
               }
               echo ">".$dias_mes[$i]."</option>";
           }
       ?>
   </select>
   <b>-</b>
	 <select name="mes" size="1">
       <?php
           $meses_anio =array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
           for($i=0; $i < count( $meses_anio ); $i++)
           {
               echo "<option value='".($i+1)."' ";
               if( ($i+1) == $mes )
               {
                   echo " selected ";
               }
               echo ">".$meses_anio[$i]."</option>";
           }
       ?>
		<b>-</b>
		
   <input type="text" size="4" maxlength="4" name="anio"
    <?php
       echo " value='".$anio."'";
    ?>
    >
<br><br><br>