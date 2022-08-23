<?php
include ('conexion.php');
$nombre =$_POST['nombre'];
$unidad =$_POST['unidad'];
$usuario =$_POST['usuario'];
$cantidad =$_POST['cantidad'];
$fecha =$_POST['fecha'];
$accion =$_POST['accion'];
 



$query8 = "SELECT * from proteina where '$nombre'=nombre";
$result8 = pg_query($query8) or die('PROBLEMAS CON LA CONEXION: ' . pg_last_error());
 if(pg_num_rows($result8)>0)
 {
      
            header("Location:../principal-proteinas.php?usu=6");  
    }

 else{
                
    $query = "INSERT INTO proteina(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$nombre','$fecha','$unidad','$usuario','$cantidad','$accion')";
    $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    $cmdtuples = pg_affected_rows($result);
    
    $query1 = "INSERT INTO inventario(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$nombre','$fecha','$unidad','$usuario','$cantidad','$accion')";
    $result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    $cmdtuples1 = pg_affected_rows($result1);
    
    $query2 = "INSERT INTO inv_proteina(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$nombre','$fecha','$unidad','$usuario','$cantidad','$accion')";
    $result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    $cmdtuples2 = pg_affected_rows($result2);
    
    
    
    header("Location:../principal-proteinas.php?usu=1");
    echo $cmdtuples . " datos registrados.\n";
    pg_free_result($result); 
  

 }


