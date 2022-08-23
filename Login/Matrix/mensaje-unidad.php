<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-unidad.php"); 
        break;
    case 2:
        
require ("mensajes/eliminar-unidad.php"); 

        break;

       
}


 
   
?>