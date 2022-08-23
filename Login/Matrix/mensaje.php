<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear.php"); 
        break;
    case 2:
        

require ("mensajes/editar.php"); 

        break;
    case 3:
    require ("mensajes/eliminar.php"); 
      
break;
       
}



   
?>