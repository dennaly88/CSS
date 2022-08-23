<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-condimento.php"); 
        break;
    case 2:
        

require ("mensajes/editar-condimento.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-condimento.php"); 
      
break;
case 4:
    require ("mensajes/aumento-condimento.php"); 
      
break;
case 5:
    require ("mensajes/disminucion-condimento.php"); 
      
break;


case 6:
    require ("mensajes/registro-encontrado-condimento.php"); 
      
break;
       
}



   
?>