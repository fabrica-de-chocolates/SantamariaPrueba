      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>No.Receta</th>
              <th>Nombre chocolate</th>
              <th>Ingredientes</th>
              <th>Receta</th>  
              <th>Editar</th>
              <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $receta= receta::ningunDato();
        $datos= $receta->select();
        while($fila=$datos->fetch_array()){
        ?>        
     
          <tr>
            <td><?php echo $fila['iidreceta'];?></td>
            <td><?php echo $fila['cnombre'];?></td>
            <td><?php echo $fila['cingrediente'];?></td>
            <td><?php echo $fila['creceta'];?></td>
            

             <td><i class="material-icons"><a href="recetas.php?accion=<?php echo "editar";?>&iidreceta=<?php echo $fila['iidreceta'];?>"> edit</a></i></td>
           <td align="center"><i class="material-icons"><a href="recetas.php?accion=<?php echo "eliminar";?>&iidreceta=<?php echo $fila['iidreceta'];?>"> delete</a></i>
            </td>
          </tr>
          <?php }?>
          
        </tbody>
      </table>
            

