<?php
include ('conexion.php');

$nombre =$_POST['nombre'];
$siglas =$_POST['siglas'];


                    
     $query = "INSERT INTO gerencia(nombre,siglas) VALUES 
                    ('$nombre','$siglas')";
                                        $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                        $cmdtuples = pg_affected_rows($result);


                                        
                    header("Location:../principal-gerencia.php?usu=1?");
                    echo $cmdtuples . " datos registrados.\n";
                    pg_free_result($result); 


















   