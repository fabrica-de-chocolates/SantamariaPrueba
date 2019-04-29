<?php 


if(isset($_GET['accion']) && $_GET['accion']=='editar' && isset($_GET['iidreceta'])){

$datos=array('cnombre'=>'','cingrediente'=>'','creceta'=>'','iidreceta'=>'');
	
	$iidreceta= $_GET['iidreceta'];
	$receta= receta::soloID($iidreceta);
	$array = $receta->selectID();
	$datos=$array->fetch_array();
	$accion= 'update';
}
if(isset($_GET['accion']) && $_GET['accion']=='eliminar' && isset($_GET['iidreceta'])){

	$iidrec= $_GET['iidreceta'];
	$receta = receta::soloID($iidrec);
	$array = $receta->delete();	
	
}

?>