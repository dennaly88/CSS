<?php
include('conexion.php');




$query = "DELETE FROM comida";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());












header("Location: http:../principal-resetear.php?usu=2");
