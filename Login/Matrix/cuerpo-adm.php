<?php

//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if (!isset($_SESSION['usuario'])) {

  header('Location: index.php');

  exit();
}

?>

<br><br><br>
<center>
  <div class="card text-center info w-75">
    <div class="card-header bg-secondary">
      <button class="btn mr-3 btn-primary btn-sm">Administrar Comida</button>
      <button class="mr-3 btn btn-primary btn-sm" onclick="location.href='principal-gerencia.php'">Administrar Gerencia</button>




    </div>
    <div class="card-body">

      <body>
        <a href="adm-charcuteria.php">
          <img src="img/charcuteria.jpg" class="img-fluid" alt="Responsive image"></a>
        <a href="adm-condimentos.php">
          <img src="img/condimentos.jpg" class="img-fluid" alt="Responsive image"><br><br></a>
        <a href="adm-hortalizas.php">
          <img src="img/hortalizas.jpg" class="img-fluid" alt="Responsive image"></a>

        <a href="adm-materiales.php">
          <img src="img/materiales.jpg" class="img-fluid" alt="Responsive image"><br><br></a>


        <a href="adm-proteinas.php">
          <img src="img/proteinas.jpg" class="img-fluid" alt="Responsive image"></a>

        <a href="adm-viveres.php">
          <img src="img/viveres.jpg" class="img-fluid" alt="Responsive image"><br><br></a>

        <a href="adm-unidad.php">
          <img src="img/unidad.jpg" class="img-fluid" alt="Responsive image"></a>

        <a href="#">
          <img src="img/extras.jpg" class="img-fluid" alt="Responsive image"><br><br></a>



      </body>

    </div>
    <div class="card-footer text-muted bg-secondary">
      <button class="btn mr-3 btn-danger btn-sm">Gestion Humana</button>
    </div>
  </div>