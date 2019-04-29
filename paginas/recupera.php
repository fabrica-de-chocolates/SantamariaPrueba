<?php
include("../clases/chocolate.php");
//print_r($_POST);
if (isset($_POST['enviar'])) {
	print_r($_POST);
	if ($_POST['accion']=='insert') {
		
		$cnombre=$_POST['cnombre'];
		$cdescripcion=$_POST['cdescripcion'];
		$imagen=$_POST['imagen'];
		

		$chocolate=new Chocolate($cnombre,$cdescripcion,$imagen);
		$chocolate->insert();

		
	}
	if ($_POST['accion']=="update") {
		$cnombre=$_POST['cnombre'];
		$cdescripcion=$_POST['cdescripcion'];
		$imagen=$_POST['imagen'];
		
		$iidchocolate=$_POST['iidchocolate'];

		$chocolate=new Chocolate($cnombre, $cdescripcion, $imagen, $iidchocolate);	
		$chocolate->update();
	}
}else{
		header("location: agregar.php");
}
?>