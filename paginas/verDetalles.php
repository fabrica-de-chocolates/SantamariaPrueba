<!DOCTYPE html>
<?php
    include("../clases/chocolate.php")  ;
     $datos=array('cnombre'=>'', 'cdescripcion'=>'','imagen'=>'','iidchocolate'=>'');      
      $accion='insert';
      include("enlaces.php");
?>

<html lang="es">
<head>
  <title>Inicio/Santa María</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/estilo.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!--  Scripts-->
  <script src="../js/jquery.js"></script>
  <script src="../js/funciones.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/init.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();

          $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
        });
    // START OPEN
      $('.button-collapse').sideNav();
        });
     
  </script>


  <style type="text/css">
.wrapper {
    padding-left: 300px;
}
</style>

</head>
<body>

  <nav>
    <div class="nav-wrapper brown lighten-1 z-depth-4">
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

      <script language="JavaScript" type="text/javascript">
        today = new Date()
        if(today.getMinutes() < 10){
          pad = "0"}
        else
          pad = "";
          document.write ;if((today.getHours() >=6) && (today.getHours() <=9)){
          document.write("¡Buenos días!")
          }
          if((today.getHours() >=10) && (today.getHours() <=11)){
          document.write("¡Buenos días!")
          }
          if((today.getHours() >=12) && (today.getHours() <=19)){
          document.write("¡Buenas tardes!")
          }
          if((today.getHours() >=20) && (today.getHours() <=23)){
          document.write("¡Buenas noches!")
          }
          if((today.getHours() >=0) && (today.getHours() <=3)){
          document.write("¡Buenas noches!")
          }
          if((today.getHours() >=4) && (today.getHours() <=5)){
          document.write("¡Buenas noches!")
          }
      </script>
      
      <ul class="side-nav grey darken-2" id="mobile-demo">
        <li class="sidenav-header brown">
          <div class="row">
            <div class="col s4">
                <img src="../imagenes/user1.png" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8"><H5><center>Bienvenido al Sistema</center></H5>
            </div>
          </div>
        </li>
        
        <li class="white"><a href="../inicio.php" class="waves-effect waves-blue"><i class="material-icons">home</i>Inicio</a></li>
        <li class="white"><a href="agregar.php" class="waves-effect waves-blue"><i class="material-icons">Add</i>Chocolates</a></li>
        <li class="white"><a href="recetas.php" class="waves-effect waves-blue"><i class="material-icons">note</i>Recetas</a></li>
      </ul>
      
    </div>
  </nav>
  <div class="container">
  	<div class="row">

 	    <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>No.Chocolate</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $choco= Chocolate::ningunDato();
        $datos= $choco->select();
       	while($fila=$datos->fetch_array()){
        ?>        
     
          	<tr>
	            <td><?php echo $fila['iidchocolate'];?></td>
	            <td><?php echo $fila['cnombre'];?></td>
	            <td><?php echo $fila['cdescripcion'];?></td>
	            <td><img src="../imagenes/<?php echo $fila['imagen'];?>" width="80%";/></td>
        	</tr>
        <?php }?>
		</tbody>
		</table>
	</div>
</div>
		            
  <footer class="footer-copyright">
    <div>
    </div>
  </footer>
  </body>
</html>