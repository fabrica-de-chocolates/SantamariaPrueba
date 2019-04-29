<?php
session_start();
?>
<!--
 * @author Monica Canul
 * @since 24/03/2019
-->
<link type="text/css" rel="stylesheet" href="css/materialize98.min.css"  media="screen,projection"/>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="es">
  <head>
  	<title>Login</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- -->
    <meta name="description" content="Chocolates">
    <meta name="author" content="">
 
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript">
    	
    		$(document).ready(function(){
    		$('.button-collapse').sideNav({
		      menuWidth: 300, // Default is 300
		      edge: 'left', // Choose the horizontal origin
		      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		      draggable: true, // Choose whether you can drag to open on touch screens,
		      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
		      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
		    }
		  );
      		$('.parallax').parallax();
    	});

    </script>

  </head>
  <body>
   
	<div class="had-container small">
<FORM ACTION="usuario.php" METHOD="POST">
	     <div class="parallax-container logueo">
      	<div class="parallax"><img src="imagenes/fondochocolate2.jpg"></div>
      	<div class="row"><br>
      		<div class="col m4 s4 offset-m2 offset-s2 center">
      			<h4 class="truncate bg-card-user" style=" background: #48171987;">
      				<img src="imagenes/user.png" alt="" class="circle responsive-img">
					  <div class="row login">
					  	<h5>Iniciar Sesión</h5>
					    <form class="col s8">
					      <div class="row">
					         <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">account_box</i>
					          <input id="icon_prefix" name="usuario" type="text" class="validate">
					          <label for="icon_prefix">Usuario</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">enhanced_encryption</i>
					          <input id="password" name ="password" type="password" class="validate">
					          <label for="icon_prefix">Contraseña</label>
					        </div>
					      </div>
					      <div class="row">
					      	<button class="btn waves-effect brown" type="submit" name="action">Iniciar sesión!</button>
					      </div>
					    </form>
					  </div>
      			</h4>
		   	  </div>
	    	</div>
	    </div>
    </div>
    
</FORM>
    </div> <!-- fin del .container -->

<footer class="page-footer indigo brown">
    <div class="footer-copyright">
        <div class="container center">
        	Copyright © 2019 Santa María Chocolates
        </div>
    </div>
</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize2.min.js"></script>
  </body>
</html>