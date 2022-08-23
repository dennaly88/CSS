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
<center><div class="card text-center info w-75">
  <div class="card-header bg-secondary">
  <button class="btn mr-3 btn-primary btn-sm">Graficas</button>  
  </div>
  <div class="card-body">
  
	<body>
    <a href="principal-graficas-especificas.php">
    <img src="img/grafica1.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="principal-graficas-general.php">
    <img src="img/grafica2.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
   
 

	</body>

    </div>
  <div class="card-footer text-muted bg-secondary">
  <button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
  </div>
</div>
