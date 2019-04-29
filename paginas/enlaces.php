<?php 


if(isset($_GET['accion']) && $_GET['accion']=='editar' && isset($_GET['iidchocolate'])){

$datos=array('cnombre'=>'','cdescripcion'=>'','imagen'=>'','iidchocolate'=>'');
	
	$iidchocolate= $_GET['iidchocolate'];
	$chocolate = Chocolate::soloID($iidchocolate);
	$array = $chocolate->selectID();
	$datos=$array->fetch_array();
	$accion= 'update';
}
if(isset($_GET['accion']) && $_GET['accion']=='eliminar' && isset($_GET['iidchocolate'])){

	$iidchoco= $_GET['iidchocolate'];
	$chocolate = Chocolate::soloID($iidchoco);
	$array = $chocolate->delete();	
	
}

if(isset($_GET['accion']) && $_GET['accion']=='ver' && isset($_GET['iidchocolate'])){

$datos=array('cnombre'=>'','cdescripcion'=>'','imagen'=>'','iidchocolate'=>'');
	
	$iidchocolate= $_GET['iidchocolate'];
	$chocolate = Chocolate::soloID($iidchocolate);
	$array = $chocolate->selectID();
	$datos=$array->fetch_array();
}

?>