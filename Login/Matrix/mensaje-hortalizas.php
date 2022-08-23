
<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-hortalizas.php"); 
        break;
    case 2:
        

require ("mensajes/editar-hortalizas.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-hortalizas.php"); 
      
break;
case 4:
    require ("mensajes/aumento-hortalizas.php"); 
      
break;
case 5:
    require ("mensajes/disminucion-hortalizas.php"); 
      
break;
case 6:
    require ("mensajes/registro-encontrado-condimento.php"); 
      
break;
       
}



   
?>












       
