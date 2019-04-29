<?php 
/**
* 
*/
class Conexion extends mysqli
{
    
    //definimos parametros de conexion
    private $DB_HOST='localhost';
    private $DB_USER='root';
    private $DB_PASS='';
    private $DB_NAME='bdfabrica';

    public function __construct(){
          parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
          $this->set_charset('utf-8');
           if ($this->connect_errno)
        {
            echo "Fallo al conectar a MySQL: ". $this->mysqli_connect_error();
            
        }else{
            echo "";
        }
    }


}

?>