<?php
include ('conexion.php');





$edit_id=$_POST['edit_id'];
$edit_nombre=$_POST['edit_nombre'];
$edit_unidad=$_POST['edit_unidad'];
$edit_cantidad=$_POST['edit_cantidad'];
$edit_usuario=$_POST['edit_usuario'];
$edit_fecha=$_POST['edit_fecha'];
$edit_accion='Modificado';









 
     $query = "UPDATE proteina SET id='$edit_id', nombre='$edit_nombre', unidad='$edit_unidad',cantidad='$edit_cantidad', usuario='$edit_usuario' , 
     fecha='$edit_fecha',accion='$edit_accion'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());



     $query1 = "INSERT INTO inventario(nombre,unidad,cantidad,usuario,fecha,accion) VALUES ('$edit_nombre','$edit_unidad','$edit_cantidad',
     '$edit_usuario','$edit_fecha','$edit_accion')";
     $result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
     $cmdtuples1 = pg_affected_rows($result1);

     $query2 = "INSERT INTO inv_proteina(nombre,unidad,cantidad,usuario,fecha,accion) VALUES ('$edit_nombre','$edit_unidad','$edit_cantidad',
     '$edit_usuario','$edit_fecha','$edit_accion')";
     $result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
     $cmdtuples2 = pg_affected_rows($result2);

header("Location: http:../principal-proteinas.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






