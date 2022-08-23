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
  <button class="btn mr-3 btn-primary btn-sm">Graficas Especificas</button>  
  </div>
  <div class="card-body">
  
	<body>
    <a href="principal-graficas-charcuteria.php">
    <img src="img/charcuteria-graficas.jpg" class="img-fluid" alt="Responsive image"></a>
    <a href="principal-graficas-condimentos.php">
    <img src="img/condimento-graficas.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
    <a href="principal-graficas-hortalizas.php">
    <img src="img/hortalizas-graficas.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-graficas-materiales.php">
    <img src="img/materiales-graficas.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


    <a href="principal-graficas-proteinas.php">
    <img src="img/proteinas-graficas.jpg" class="img-fluid" alt="Responsive image"></a>

    <a href="principal-graficas-viveres.php">
    <img src="img/viveres.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


	</body>

    </div>
  <div class="card-footer text-muted bg-secondary">
  <button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
  </div>
</div>
