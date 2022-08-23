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
  <button class="btn mr-3 btn-primary btn-sm">Alimentos</button>  
  </div>
  <div class="card-body">
  
	<body>
    <a href="principal-charcuteria.php">
    <img src="img/charcuteria.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="principal-condimentos.php">
    <img src="img/condimentos.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
    <a href="principal-hortalizas.php">
    <img src="img/hortalizas.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-materiales.php">
    <img src="img/materiales.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


    <a href="principal-proteinas.php">
    <img src="img/proteinas.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-viveres.php">
    <img src="img/viveres.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


	</body>

    </div>
  <div class="card-footer text-muted bg-secondary">
  <button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
  </div>
</div>
