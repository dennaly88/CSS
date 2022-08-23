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
<center><div class="card text-center info w-50">
<div class="card-header bg-secondary">
<button class="btn mr-3 btn-primary btn-sm">Calendario</button>  
</div>
<div class="card-body">

<body style="background:rgb(A89E9E) no-repeat center center fixed;">
<?php require ("calendario/calendario.php");?>


</body>

</div>
<div class="card-footer text-muted bg-secondary">
<button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
</div>
</div>

