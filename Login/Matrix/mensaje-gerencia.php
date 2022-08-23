<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-gerencia.php"); 
        break;
    case 2:
        

require ("mensajes/eliminar-gerencia.php"); 

        break;
    
       
}



   
?>