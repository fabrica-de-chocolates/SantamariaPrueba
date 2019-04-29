<?php
/*
 * @author Monica Canul
 * @since 24/03/2019
*/
session_start();
$user=$_POST['usuario']; //Guardar usuario
$pass=$_POST['password']; //Guardar contraseña

if($user=="admin" && $pass=="123456"){ //realizar validación
             header('Location: inicio.php'); 
		}else{
            // header('Location: login.php'); 
            echo '<script>location.href="login.php"</script>';

	}
?>