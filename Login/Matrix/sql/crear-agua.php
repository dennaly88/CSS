<?php
include('conexion.php');

$gerencia = $_POST['gerencia'];
$dia = $_POST['dia'];
$cantidad = $_POST['cantidad'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$hora = $_POST['hora'];





$query = "INSERT INTO agua(gerencia,dias,cantidad,usuario,fecha,estado,hora) VALUES 
                    ('$gerencia','$dia','$cantidad','$usuario','$fecha','$estado','$hora')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);


























header("Location:../principal-aguas.php?usu=1?");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);
