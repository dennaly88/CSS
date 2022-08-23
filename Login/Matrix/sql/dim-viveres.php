<?php
include ('conexion.php');

$edit_nombre=$_POST['edit_nombre'];
$edit_cantidad=$_POST['edit_cantidad'];
$edit_cantidad_nueva=$_POST['edit_cantidad_nueva'];
$edit_accion="Disminucion";
session_start();  
$edit_id=$_SESSION['id'] ;
$edit_unidad=$_SESSION['unidad'] ;
$edit_usuario=$_SESSION['usuario'] ;

$edit_fecha=$_POST['edit_fecha'];




$edit_cantidad=$edit_cantidad-$edit_cantidad_nueva;

 
     $query = "UPDATE viveres SET id='$edit_id', nombre='$edit_nombre', unidad='$edit_unidad',cantidad='$edit_cantidad',
     usuario='$edit_usuario', fecha='$edit_fecha',accion='$edit_accion'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

     if($edit_nombre==='Harina Pan')
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


     $query1 = "INSERT INTO inventario(nombre,unidad,cantidad,usuario,fecha,accion) VALUES ('$edit_nombre','$edit_unidad','$edit_cantidad',
     '$edit_usuario','$edit_fecha','$edit_accion')";

     $result1 = pg_query($conexion, $query1) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
     $cmdtuples1 = pg_affected_rows($result1);
     






header("Location: http:../principal-viveres.php?usu=5");
      
  echo "SE BORRO EL REGISTRO";
