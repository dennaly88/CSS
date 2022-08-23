

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

 


if($edit_nombre==='HARINA PAN')
{



  
$query28 = "INSERT INTO harinas(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result28 = pg_query($conexion, $query28) or die('ERROR AL INSERT: ' . pg_last_error());
$cmdtuples28 = pg_affected_rows($result28);
  
  header("Location:../principal-viveres.php?usu=1");
  echo $cmdtuples28 . " datos registrados.\n";
  pg_free_result($result); 

}



       else 
       if($edit_nombre==='HARINA KALY'){

       
$query28 = "INSERT INTO harinas(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result28 = pg_query($conexion, $query28) or die('ERROR AL INSERT: ' . pg_last_error());
$cmdtuples28 = pg_affected_rows($result28);
       
       
       header("Location:../principal-viveres.php?usu=1");
       echo $cmdtuples . " datos registrados.\n";
       pg_free_result($result); 



      }
      else 
       if($edit_nombre==='HARINA LA PUBLERINA'){

       
       $query28 = "INSERT INTO harinas(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
       $result28 = pg_query($conexion, $query28) or die('ERROR AL INSERT: ' . pg_last_error());
       $cmdtuples28 = pg_affected_rows($result28);
       
       
       header("Location:../principal-viveres.php?usu=1");
       echo $cmdtuples . " datos registrados.\n";
       pg_free_result($result); 



      }













$query1 = "INSERT INTO inventario(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples1 = pg_affected_rows($result1);


$query2 = "INSERT INTO inv_viveres(nombre,fecha,unidad,usuario,cantidad,accion) VALUES ('$edit_nombre','$edit_fecha','$edit_unidad','$edit_usuario','$edit_cantidad','$edit_accion')";
$result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples2 = pg_affected_rows($result2);






 
     $query = "DELETE FROM viveres WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());



    





          header("Location: http:../principal-viveres.php?usu=3");
          
    
      
?>
 


 
