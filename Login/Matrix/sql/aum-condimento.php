<?php
include ('conexion.php');






$edit_nombre=$_POST['edit_nombre'];
$edit_cantidad=$_POST['edit_cantidad'];
$edit_cantidad_nueva=$_POST['edit_cantidad_nueva'];
$edit_fecha=$_POST['edit_fecha'];
$edit_accion="Aumento";
session_start();  
$edit_id=$_SESSION['id'] ;
$edit_unidad=$_SESSION['unidad'] ;
$edit_usuario=$_SESSION['usuario'] ;







$edit_cantidad=$edit_cantidad+$edit_cantidad_nueva;


 
     $query = "UPDATE condimento SET id='$edit_id', nombre='$edit_nombre', unidad='$edit_unidad',cantidad='$edit_cantidad',
     usuario='$edit_usuario', fecha='$edit_fecha',accion='$edit_accion'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());




     $query1 = "INSERT INTO inventario(nombre,unidad,cantidad,usuario,fecha,accion) VALUES ('$edit_nombre','$edit_unidad','$edit_cantidad',
     '$edit_usuario','$edit_fecha','$edit_accion')";

     $result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
     $cmdtuples1 = pg_affected_rows($result1);

     $query2 = "INSERT INTO inventario(nombre,unidad,cantidad,usuario,fecha,accion) VALUES ('$edit_nombre','$edit_unidad','$edit_cantidad',
     '$edit_usuario','$edit_fecha','$edit_accion')";

     $result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
     $cmdtuples2 = pg_affected_rows($result2);
     
     






header("Location: http:../principal-condimentos.php?usu=4");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






