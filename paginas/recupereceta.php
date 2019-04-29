<?php
include("../clases/receta.php");
//print_r($_POST);
if (isset($_POST['enviar'])) {
	print_r($_POST);
	if ($_POST['accion']=='insert') {
		
		$cnombre=$_POST['cnombre'];
		$cingrediente=$_POST['cingrediente'];
		$creceta=$_POST['creceta'];
		

		$receta=new receta($cnombre,$cingrediente,$creceta);
		$receta->insert();

		
	}
	if ($_POST['accion']=="update") {
		$cnombre=$_POST['cnombre'];
		$cingrediente=$_POST['cingrediente'];
		$creceta=$_POST['creceta'];
		
		$iidreceta=$_POST['iidreceta'];

		$receta=new receta($cnombre, $cingrediente, $creceta, $iidreceta);	
		$receta->update();
	}
}else{
		header("location: recetas.php");
}
?>