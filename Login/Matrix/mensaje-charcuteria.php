<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-charcuteria.php"); 
        break;
    case 2:
        

require ("mensajes/editar-charcuteria.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-charcuteria.php"); 
      
break;

case 4:
    require ("mensajes/aumentar-charcuteria.php"); 
      
break;

case 5:
    require ("mensajes/disminuir-charcuteria.php"); 
      
break;

case 6:
    require ("mensajes/registro-encontrado.php"); 
      
break;
       
}

 

   
?>