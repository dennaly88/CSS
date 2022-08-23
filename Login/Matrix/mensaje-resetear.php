<?php

$usu = $_GET["usu"];




switch ($usu) {
    case 1:

        require("mensajes/reseteo-agua.php");
        break;
    case 2:


        require("mensajes/reseteo-comida.php");

        break;
}
