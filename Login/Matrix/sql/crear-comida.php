<?php
include('conexion.php');

$gerencia = $_POST['gerencia'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$hora = $_POST['hora'];





$query = "INSERT INTO comida(gerencia,tipo,cantidad,usuario,fecha,estado,hora) VALUES 
                    ('$gerencia','$tipo','$cantidad','$usuario','$fecha','$estado','$hora')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);


$query = "INSERT INTO inv_comida(gerencia,tipo,cantidad,usuario,fecha,estado) VALUES 
                                        ('$gerencia','$tipo','$cantidad','$usuario','$fecha','$estado')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);























header("Location:../principal-comidas.php?usu=1?");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result);
