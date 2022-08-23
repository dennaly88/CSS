<?php
include ('conexion.php');





$edit_id=$_POST['edit_id'];
$edit_usu=$_POST['edit_usu'];
$edit_pass=$_POST['edit_pass'];
$edit_per=$_POST['edit_per'];
$edit_cor=$_POST['edit_cor'];
$edit_nom=$_POST['edit_nom'];
$edit_ape=$_POST['edit_ape'];
$edit_tel=$_POST['edit_tel'];
$edit_ced=$_POST['edit_ced'];







 
     $query = "UPDATE usuarios SET id='$edit_id', usuario='$edit_usu', pass='$edit_pass',perfil='$edit_per',correo='$edit_cor', nombres='$edit_nom',apellidos='$edit_ape' ,telefono='$edit_tel' ,cedula='$edit_ced'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-usuario.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






