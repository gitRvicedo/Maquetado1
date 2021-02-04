<?php 
$server ="localhost";
$user="root";
$pass="";
$bd="bd_mavo";

$conexion = new mysqli($server,$user,$pass,$bd);
$productos = "select * from productos";


if ($conexion->connect_errno)
{
    die("error de conexion".$conexion -> connect_errno);
}
//else {print "la coneccion se realizo correctamente ";}

$resultado = mysqli_query($conexion,$productos);


while($row = mysqli_fetch_assoc($resultado)){

    $ID = $row["ID"];
    $NOMBRE = $row["NOMBRE"];
    $DESCRIPCION = $row["DESCRIPCION"];
    $PRECIO = $row["PRECIO"];
   
    print "$ID<br/>";
    print "$NOMBRE<br/>";
    print "$DESCRIPCION<br/>";
    print "$PRECIO<br/>";
    //echo $row["ID"];
    //echo $row["NOMBRE"];
    
}



mysqli_free_result($resultado);
?>