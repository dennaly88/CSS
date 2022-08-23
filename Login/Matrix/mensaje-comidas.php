<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-comidad.php"); 
        break;
    case 2:
        

require ("mensajes/editar-comidad.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-comidad.php"); 
      
break;


 
       
}



   
?>