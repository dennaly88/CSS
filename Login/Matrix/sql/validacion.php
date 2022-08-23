 <html>
<head>
<meta charset="utf-8">
<title>VTV</title>
</head>
<body>


<link rel="stylesheet" href="toastr/toastr.min.css">


<?php
include ('conexion.php');
session_start();  
                     $_SESSION['usuario']=$usuario;
?>


<?php


      
                  $usuario = $_POST['usuario'];
                  $pass = $_POST['pass'];
                  $query = "SELECT * from usuarios where '$usuario'=usuario and '$pass'=pass";
                  $result = pg_query($query) or die('PROBLEMAS CON LA CONEXION: ' . pg_last_error());

                   if(pg_num_rows($result)>0)

                   {
                         session_start();  
                         
                       $_SESSION['usuario']=$usuario;

                              header("Location:../principal.php?=8");  
                      
                      }
                      

       
                   else{
                   	
                   
                      header("Location:../index.php?usu=88");

                       
                   }

  ?>


  </body>
  </html>
