

<?php
include ('conexion.php');
$id = $_GET['id'];
$edit_id=$_POST['edit_id'];
$edit_nombre=$_POST['edit_nombre'];
$edit_unidad=$_POST['edit_unidad'];
$edit_cantidad=$_POST['edit_cantidad'];
$edit_usuario=$_POST['edit_usuario'];
$edit_fecha=$_POST['edit_fecha'];
$edit_accion=['edit_accion'];








 
     $query = "DELETE FROM inventario WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());



    





          header("Location: http:../principal-inventario-general.php?usu=3");
          
    
      
?>
 


 