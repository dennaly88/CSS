<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>

<br><br><br>

  <div class="card-body">
  
  <body style="background:rgb(A89E9E) no-repeat center center fixed;">
    <?php require ("calculadora.php");?>


	</body>

    </div>
  
</div>
