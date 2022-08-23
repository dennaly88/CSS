<?php
include ('conexion.php');

$id = $_GET['id'];

$query = "DELETE FROM tipo_charcuteria WHERE id ='$id'";

 

$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);



header("Location:../adm-charcuteria.php?usu=3");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 


   