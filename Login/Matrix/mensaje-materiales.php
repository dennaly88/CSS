

<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
        require ("mensajes/crear-materiales.php"); 
        break;
    case 2:
        
        require ("mensajes/editar-materiales.php");
 

        break;
    case 3:
    
        require ("mensajes/eliminar-materiales.php");
break;
case 4:
    
    require ("mensajes/aumento-materiales.php");
break;
case 5:
    
    require ("mensajes/disminuir-materiales.php");
break;



case 6:
    
    require ("mensajes/registro-encontrado-condimento.php");
break;
       
}


    
   
?>