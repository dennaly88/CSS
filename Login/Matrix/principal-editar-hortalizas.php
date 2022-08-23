<?php
include ('sql/conexion.php');
include ('scrips/seguridad.php');

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/FAVicon.ico"> 

			     <meta charset="utf-8">
			     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
        
        
                                 <title>Arepera VTV</title>
						
</head>

 
            
<body>
        
        

        
       <!-- LIBRERIAS CSS I JS      --> 
        
                 <?php require ("scrips/librerias.php");?><!-- LIBRERIAS CSS I JS      --> 
                 <?php require ("principal-menu.php");?><br><br><br><!-- MENU  -->
                 <?php require ("cuerpo-hortalizas.php");?>
                 <?php require ("editar-hortalizas.php");?>
                  
                 
               
        </body>
               <?php require ("footer.php");?><!-- FOOTER  -->
               <?php require ("mensaje.php");?> 
               
               
       
</html>


