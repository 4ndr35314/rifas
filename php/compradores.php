
    <?php
        require("conexion.php");

        $sql="SELECT id,nombre,numCedula,telefono,fechaRegistro FROM compradores";

        $resultado=mysqli_query($con,$sql);




    ?>
     <button class="btn btn-primary" id="agregarComprador" onClick="agregarComprador()">agregar comprador</button>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">nombre</th>
        <th scope="col">cedula</th>
        <th scope="col">telefono</th>
        <th scope="col">eliminar</th>
        </tr>
    </thead>
    <thbody class="text-center">
    <?php

    while($res=mysqli_fetch_array($resultado)){

        echo '<tr>';
            echo '<td>'.$res['id'].'</td>';
             
            echo '<td>'.$res['nombre'].'</td>';
              
            echo '<td>'.$res['numCedula'].'</td>';
              
            echo '<td>'.$res['telefono'].'</td>';
           
            echo '<td class="text-center">'.            
            '<img src="src/img/eliminar.png" id="delete" 
            data-eliminar="'.$res['id'].'" onClick="pagEliminar()">'.'</td>';
        echo '</tr>';


    }
        


    ?>
   
    </thbody>

</table>

