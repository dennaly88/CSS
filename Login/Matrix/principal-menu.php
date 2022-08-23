

<?php
include('0.conexion.php');

session_start();
$usuario = $_SESSION['usuario'];



$query = "SELECT perfil from usuarios where '$usuario'=usuario";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

while ($row = pg_fetch_array($result)) {
    $count = $row[0];
}




if ($count == 'administrador') {

    require("menu/administrador.php");
} else
if ($count == 'coordinador') {



    require("menu/coordinador.php");
} else {

    require("menu/basico.php");
}




?> 





