      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>No.Chocolate</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Imagen</th>  
              <th>Editar</th>
              <th>Eliminar</th>
              <th>Visualisar</th>
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
            <td><img src="../imagenes/<?php echo $fila['imagen'];?>" width="50%";/></td>
            

             <td><i class="material-icons"><a href="agregar.php?accion=<?php echo "editar";?>&iidchocolate=<?php echo $fila['iidchocolate'];?>"> edit</a></i></td>
           <td align="center"><i class="material-icons"><a href="agregar.php?accion=<?php echo "eliminar";?>&iidchocolate=<?php echo $fila['iidchocolate'];?>"> delete</a></i>
            </td>
            <td><i class="material-icons"><a href="javascript:popup('verDetalles.php')"> visibility</a></i>
            </td>               
          </tr>
          <?php }?>
          
        </tbody>
      </table>
            

