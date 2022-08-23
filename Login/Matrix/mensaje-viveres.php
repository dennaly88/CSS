<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-viveres.php"); 
        break;
    case 2:
        
require ("mensajes/editar-viveres.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-viveres.php"); 
      
break;
case 4:
    require ("mensajes/aumentar-viveres.php"); 
      
break;
case 5:
    require ("mensajes/disminuir-viveres.php"); 
      
break;
case 6:
    require ("mensajes/registro-encontrado-condimento.php"); 
      
break;
       
}


 
   
?>