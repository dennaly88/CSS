

<?php
include ('conexion.php');
$id = $_GET['id'];
$edit_id=$_POST['edit_id'];
$edit_nombre=$_POST['edit_nombre'];
$edit_unidad=$_POST['edit_unidad'];
$edit_cantidad=$_POST['edit_cantidad'];
$edit_usuario=$_POST['edit_usuario'];
$edit_fecha=$_POST['edit_fecha'];
$edit_accion="Eliminado";


$query1 = "INSERT INTO inventario(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples1 = pg_affected_rows($result1);

$query2 = "INSERT INTO inv_hortaliza(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples2 = pg_affected_rows($result2);





 
     $query = "DELETE FROM hortaliza WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());



    





          header("Location: http:../principal-hortalizas.php?usu=3");
          
    
      
?>
 


 