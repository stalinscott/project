<?php 
class Database extends PDO
{
 
    //nombre base de datos
    protected $dbname = "project";
    //nombre servidor
    protected $host = "localhost";
    //nombre usuarios base de datos
    protected $user = "postgres";
    //password usuario
    protected $pass = 123456;
    //puerto postgreSql
    protected $port = 5432;
    protected $dbh;
 
    //creamos la conexión a la base de datos tienda
    public function __construct() 
    {
        try {
            $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
        } catch(PDOException $e) {
            echo  $e->getMessage(); 
        }
 
    }
 
    //función para cerrar una conexión pdo
    public function close_con() 
    {
        $this->dbh = null; 
    }
}