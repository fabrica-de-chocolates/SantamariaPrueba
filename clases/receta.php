<?php
/**
 * @author Monica Canul
 * @since 25/03/2019
 */
include("../conexion/conn.php");
class receta {
	//Clase receta.
	protected $iidreceta;// ID de la receta.
	protected $cnombre;//Nombre de la receta.
	protected $cingrediente;//Ingredientes de la receta.
	protected $creceta;//Descripción de la receta.


	public function __construct($nom, $ing,$rec,$idrec='')//Función contructor de la clase.
	{
		
		$this->cnombre=$nom;
		$this->cingrediente = $ing;
		$this->creceta=$rec;
		$this->iidreceta=$idrec;
		
	}

	static function soloID($idrec)
	{		// Función por ID.
		return new self('','','',$idrec);
	}

	static function ningunDato()
	{// Función para ningun dato.
		return new self('','','','');
	}


	public function insert()
	{// Insertar los elementos en la tabla receta.
		$db=new Conexion();
		$SQLInsert="INSERT INTO reseta (cnombre, cingrediente, creceta) values ('$this->cnombre','$this->cingrediente','$this->creceta')";
		if($db->query($SQLInsert))// validación para regresar a la vista.
		 header("location: recetas.php");
		else 
		  header("location: recetas.php");
	}

	public function delete()
	{		//función para eliminar un elemento de la tabla receta.
		$db=new Conexion();
		$SQLDelete="DELETE FROM reseta WHERE iidreceta=$this->iidreceta";
		if($db->query($SQLDelete))// validación para regresar a la vista.
		 header("location: recetas.php");
		else 
		  header("location: recetas.php");

	}

	public function update()
	{		//función para actualizar un elemnto de la tabla receta.
		$db=new Conexion();
		$SQLUpdate="UPDATE reseta SET cnombre='$this->cnombre', cingrediente='$this->cingrediente',creceta='$this->creceta' WHERE iidreceta=$this->iidreceta";
		if($db->query($SQLUpdate))// validación para regresar a la vista
		 header("location: recetas.php");
		else 
		  header("location: recetas.php");

	}
	public function selectID()
	{//función para buscar por el ID en la tabla receta.
		$db=new Conexion();
		$SQLSelect="SELECT * FROM reseta WHERE iidreceta=$this->iidreceta";
		$row=$db->query($SQLSelect);
		return $row;
	}


	public function select(){
		//Función para trase todos los elementos de la tabla receta.
		$db=new Conexion();
		$SQLSelect="SELECT * FROM reseta";
		$row=$db->query($SQLSelect);
		return $row;
	}

	

}
?>