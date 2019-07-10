<?php
include_once('../includes/database.php');
session_start();
if(isset ($_SESSION['usuario'])) {

  $grabado=$_SESSION['codorg'];}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; }
class Productos
{
 
    public function __construct()
    {
        $this->dbh = new Database();
    }
       
    //obtenemos el número de productos totales
    public function get_all_products()
    {
         try {
            
            $sql = "SELECT COUNT(*) from empleado";
            $query = $this->dbh->prepare($sql);
            $query->execute();
 
            //si es true
            if($query->rowCount() == 1)
            {
                 
                 return $query->fetchColumn();
    
            }
            
        }catch(PDOException $e){
            
            print "Error!: " . $e->getMessage();
            
        }      
    }
 
    //creamos los enlaces de nuestra paginación
    public function crea_links()
    {
 
        //html para retornar
        $html = "";
 
        //página actual
        $actual_pag = $_SESSION["actual"];
 
        //limite por página
        $limit = $_SESSION["limit"];
 
        //total de enlaces que existen
        $totalPag = floor($this->get_all_products()/$limit);
 
        //links delante y detrás que queremos mostrar
        $pagVisibles = 2;
 
        if($actual_pag <= $pagVisibles)
        {
            $primera_pag = 1;   
        }else{
            $primera_pag = $actual_pag - $pagVisibles; 
        }
 
        if($actual_pag + $pagVisibles <= $totalPag)
        {
            $ultima_pag = $actual_pag + $pagVisibles;
        }else{
            $ultima_pag = $totalPag;
        }
         
        $html .= '<p>';
        $html .= ($actual_pag > 0) ? 
        ' <a href="#" class="btn btn-default" onclick="paginate(0,'.$limit.')">Primera</a>' : 
        ' <a href="#" class="btn btn-default disabled">Primera</a>';
        $html .= ($actual_pag > 0) ? 
        ' <a href="#" class="btn btn-default" onclick="paginate('.(($actual_pag-1)*$limit).','.$limit.')">Anterior</a>' : 
        ' <a href="#" class="btn btn-default disabled">Anterior</a>';
         
        for($i=$primera_pag; $i<=$ultima_pag; $i++) 
        {
            $html .= ($i == $actual_pag) ? 
            ' <a class="btn btn-primary round disabled" href="#">'.$i.'</a>' : 
            ' <a class="btn btn-default" href="#" onclick="paginate('.(($i)*$limit).','.$limit.')">'.$i.'</a>';
        }
         
        $html .= ($actual_pag < $totalPag) ? 
        ' <a href="#" class="btn btn-default" onclick="paginate('.(($actual_pag+1)*$limit).','.$limit.')">Siguiente</a>' : 
        ' <a href="#" class="btn btn-default disabled">Siguiente</a>';
        $html .= ($actual_pag < $totalPag) ? 
        ' <a href="#" class="btn btn-default" onclick="paginate('.(($totalPag)*$limit).','.$limit.')">Última</a>' : 
        ' <a href="#" class="btn btn-default disabled">Última</a>';
        $html .= '</p>';
 
        return $html;
 
    }
 
    public function get_products($offset = 0, $limit = 5)
    {
        if($offset == 1){
            $_SESSION["actual"] = 1;
        }else{
            $_SESSION["actual"] = $offset/$limit;
        }
        $_SESSION["limit"] = $limit;
        try {
            

            $sql = "SELECT empleado.cedper, empleado.codcar, empleado.codorg, empleado.id_horario, empleado.clave, sn_cargo.descar, sno_organigrama.desorg, personal.nombres, personal.apellido
  FROM public.empleado, public.sn_cargo, public.sno_organigrama, public.personal WHERE empleado.codcar=sn_cargo.codcar AND sno_organigrama.codorg=empleado.codorg AND empleado.cedper=personal.cedper AND empleado.codorg=sno_organigrama.codorg and empleado.codorg=".$_SESSION['codorg'] OFFSET ? LIMIT ?";

            $query = $this->dbh->prepare($sql);
            $query->bindValue(1, (int) $offset, PDO::PARAM_INT); 
            $query->bindValue(2, (int) $limit, PDO::PARAM_INT); 
            $query->execute();
 
            //si existe el usuario
            if($query->rowCount() > 0)
            {
                 
                 return $query->fetchAll();
    
            }
            
        }catch(PDOException $e){
            
            print "Error!: " . $e->getMessage();
            
        }        
        
    }
}