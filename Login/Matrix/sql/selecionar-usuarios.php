<?php
include ('sql/conexion.php');
$id = $_GET['id'];
   


     $query = "SELECT * FROM usuarios WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['usuario'];
      $row['pass'];
      $row['perfil']; 
      $row['correo'];
      $row['nombre'];
      $row['apellido']; 
      $row['telefono'];
      $row['cedula'];


?>