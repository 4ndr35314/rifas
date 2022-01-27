<?php
    require("../php/conexion.php");

    $eli=$_GET['eli'];


    $sql="DELETE FROM compradores WHERE id='$eli'";

    $resultado=mysqli_query($con,$sql)or die("error al consultar".mysqli_error($con));

    mysqli_close($con);
    

    


?>