<?php
/**
 * @author Monica Canul
 * @since 25/03/2019
 */
include("../conexion/conn.php"); //conexión
class Chocolate {
	// Chosolate es la clase donde almacena las caracterisitcas de lo que se registra.
	protected $iidchocolate; // ID del chocolate.
	protected $cnombre;// nombre del chocolate.
	protected $cdescripcion;//descripción del chocolate.
	protected $imagen; //imagen del chcolate.


	public function __construct($nom,$cdescrip,$img,$idchoco='') //constructor de la clase.
	{
		
		$this->cnombre=$nom;
		$this->cdescripcion=$cdescrip;
		$this->imagen=$img;
		$this->iidchocolate=$idchoco;
		
	}

	static function soloID($idchoco)//función por ID.
	{		
		return new self('','','',$idchoco);
	}

	static function ningunDato()// Función para ningun dato.
	{
		return new self('','','','');
	}


	public function insert() // Insertar los elementos en la tabla chocolates.
	{
		$db=new Conexion(); 
		$SQLInsert="INSERT INTO chocolates (cnombre, cdescripcion, imagen) values ('$this->cnombre','$this->cdescripcion','$this->imagen')"; 
		if($db->query($SQLInsert)) // validación para regresar a la vista
		 header("location: agregar.php");
		else 
		  header("location: agregar.php");
	}

	public function delete(){ //función para eliminar un elemnto de la tabla.
		$db=new Conexion();
		$SQLDelete="DELETE FROM chocolates WHERE iidchocolate=$this->iidchocolate";
		if($db->query($SQLDelete))
		 header("location: agregar.php");
		else 
		  header("location: agregar.php");

	}

	public function update(){ //Función actualizar elemento en la tabla chocolates.
		$db=new Conexion();
		$SQLUpdate="UPDATE chocolates SET cnombre='$this->cnombre', cdescripcion='$this->cdescripcion',imagen='$this->imagen' WHERE iidchocolate=$this->iidchocolate";
		if($db->query($SQLUpdate))
		 header("location: agregar.php");
		else 
		  header("location: agregar.php");

	}
	public function selectID(){ //función para buscar por el ID en la tabla chocolates.
		$db=new Conexion();
		$SQLSelect="SELECT * FROM chocolates WHERE iidchocolate=$this->iidchocolate";
		$row=$db->query($SQLSelect);
		return $row;
	}


	public function select(){ //Función para trase todos los elementos de la tabla chocolates.
		$db=new Conexion();
		$SQLSelect="SELECT * FROM chocolates";
		$row=$db->query($SQLSelect);
		return $row;
	}

}
?>