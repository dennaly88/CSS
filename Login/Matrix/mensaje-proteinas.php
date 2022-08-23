<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-proteinas.php"); 
        break;
    case 2:
        

require ("mensajes/editar-proteinas.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-proteinas.php"); 
      
break;

case 4:
    require ("mensajes/aumento-proteinas.php");  
      
break;
case 5:
    require ("mensajes/disminuir-proteinas.php"); 
      
break;
case 6:
    require ("mensajes/registro-encontrado-condimento.php"); 
      
break;
       
}


 
   
?>