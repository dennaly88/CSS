<?php
include ('conexion.php');
$nombre =$_POST['nombre'];

 

$query = "INSERT INTO tipo_charcuteria(nombre) VALUES ('$nombre')";

$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);



header("Location:../principal-adm-charcuteria.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 


   