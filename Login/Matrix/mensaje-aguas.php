<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/crear-agua.php");
        break;
    case 2:


        require("mensajes/editar-agua.php");

        break;
    case 3:
        require("mensajes/eliminar-agua.php");

        break;
}
