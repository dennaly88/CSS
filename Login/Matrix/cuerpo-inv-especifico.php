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
  <button class="btn mr-3 btn-primary btn-sm">Inventario Especifico </button>  
  </div>
  <div class="card-body">
  
	<body>
    <a href="principal-charcuteria-inv.php">
    <img src="img/charcuteria-inv.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="principal-condimentos-inv.php">
    <img src="img/condimentos-inv.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
    <a href="principal-hortalizas-inv.php">
    <img src="img/hortalizas-inv.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-materiales-inv.php">
    <img src="img/materiales-inv.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


    <a href="principal-proteinas-inv.php">
    <img src="img/proteinas-inv.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-viveres-inv.php">
    <img src="img/viveres-inv.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
 

	</body>

    </div>
  <div class="card-footer text-muted bg-secondary">
  <button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
  </div>
</div>
