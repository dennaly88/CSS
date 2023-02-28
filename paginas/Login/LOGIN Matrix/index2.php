<!doctype html>
<link rel="shortcut icon" href="img/FAVicon.ico"> 
<title>Arepera VTV</title>
<html>
	<head>
	
		<link rel="stylesheet" href="css/body.css">
	

	</head>

	<?php
unset($usu);
$usu1=$_GET["usu"];





      if($usu1<8){

       
    } else{

require ("mensajes/error-usuario.php");



    }


   
     
?>
	<body>
	<div class="loginBox">
		
		
	<div class="card-header bg-secondary"><center><img src="img/logo-menu.png"><center></div><br>
	<form class="form-container" method="post"action="sql/validacion.php">
			<p>Usuarios</p>
			<input type="text" name ="usuario"placeholder="&#x1f468;" required>
			<p>Contraseña</p>
			<input type="password" name = "pass" placeholder="&#128274;" required>
			<input type="submit" name = "" value="Entrar"><br>
			
			
		</form>
		<MARQUEE WIDTH=100% text=white > <FONT FACE=arial COLOR=white >Arepera VTV Asi Somos 
</MARQUEE><br>
	</div>
	
	</body>
</html>





