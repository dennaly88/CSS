

<body style="background-color: silver;">


<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales ;";
$resulatdo = pg_query($query) or die ("error ");
$C = pg_num_rows($resulatdo);

if($C>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       
       
    }
    ?>

    

    <?php
  }
?> 
<?php     
   
include ('conexion.php');

$query = "SELECT cantidad FROM materiales where nombre='Cubierto';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC='Cubierto';
  
if($CC>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       


        
$Q=$fila['cantidad']; 
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Cucharilla';";
$resulatdo = pg_query($query) or die ("error ");
$CS = pg_num_rows($resulatdo);
$PC=($CS/$C)*100;
$NAS='Cucharilla';

if($CS>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $M=$fila['cantidad']; 
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Papel para Envalar';";
$resulatdo = pg_query($query) or die ("error ");
$CM = pg_num_rows($resulatdo);
$PM=($CM/$C)*100;
$P='Papel para Envalar';

if($CM>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $CP=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 


<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Bolsas Papel';";
$resulatdo = pg_query($query) or die ("error ");
$CT = pg_num_rows($resulatdo);
$PT=($CT/$C)*100;

$NAT='Bolsas Papel';

if($CT>0){



  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $S=$fila['cantidad'];  
    }
    ?>
   

    <?php
  }
?> 



<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Bolsas Plastica 10K';";
$resulatdo = pg_query($query) or die ("error ");
$CE = pg_num_rows($resulatdo);
$PE=($CE/$C)*100;
$NAE='Bolsas Plastica 10K';

if($CE>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $J=$fila['cantidad']; 
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Bolsas Plasticas 50K';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$NACC='Bolsas Plasticas 50K';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $A=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 


<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Envases de Comida';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$QQ='Envases de Comida';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $CU=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 






<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Cloro';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$CURRY='Cloro';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $CUR=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 





<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Desengrasante';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$OREGANO='Desengrasante';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $OR=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 




<?php     
   
include ('conexion.php');

$query = "SELECT * FROM materiales where nombre='Papel Higienico';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$LECHUGA='Papel Higienico';

if($CACC>0){


  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $LECHU=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 


<?php     
   
include ('conexion.php');

$query = "SELECT cantidad FROM materiales where nombre='Tapabocas';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC1='Tapabocas';
  
if($CC>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       


        
$Q1=$fila['cantidad']; 
       
    }
    ?>
    

    <?php
  }
?> 



<?php     
   
include ('conexion.php');

$query = "SELECT cantidad FROM materiales where nombre='Brillos';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$REPOLLO='Brillos';
  
if($CC>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
       


        
$REPOLLON=$fila['cantidad']; 
       
    }
    ?>
    

    <?php
  }
?> 
<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Tapas de Envases';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NREMOLACHA='Tapas de Envases';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CREMOLACHA=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 




<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Ganchos';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAJO='Ganchos';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CAJO=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 


<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Pinsas';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCEBOLLIN='Pinsas';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CCEBOLLIN=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 


<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Coladores';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCILANTRO='Coladores';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CCILANTRO=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 



<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Cucharas';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NPEREGIL='Cucharas';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CPEREGIL=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 


<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Olla Arrocera';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAJOP='Ajo Porro';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CAJOP=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 
<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Olla Sancochera';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCELERY='Olla Sancochera';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CCELERY=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 
   <?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Paila';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAJI='Paila';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CAJI=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 



<?php     
   
   include ('conexion.php');
   
   $query = "SELECT cantidad FROM materiales where nombre='Sarten';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NSARTEN='Sarten';
     
   if($CC>0){
   
     ?>
     
       <?php
       while ($fila=pg_fetch_array($resulatdo)){
          
   
   
           
   $CSARTEN=$fila['cantidad']; 
          
       }
       ?>
       
   
       <?php
     }
   ?> 























<?php
$T=$Q+$M+$CP+$S+$J+$A+$CU+$CUR+$OR+$TLECHU+$Q1+$REPOLLON+$CREMOLACHA+$CAJO+$CCEBOLLIN+$CCILANTRO+$CPEREGIL+$CAJOP+$CCELERY+$CAJI+$CSARTEN;




$TQ=($Q/$T)*100;
$TM=($M/$T)*100;
$TS=($S/$T)*100;
$TCP=($CP/$T)*100;
$TJ=($J/$T)*100;
$TA=($A/$T)*100;
$TCU=($CU/$T)*100;
$TCUR=($CUR/$T)*100;
$TOR=($OR/$T)*100;
$TLECHU=($LECHU/$T)*100;
$TQ1=($Q1/$T)*100;
$TREPOLLO=($REPOLLON/$T)*100;
$TREMOLACHA=($CREMOLACHA/$T)*100;
$TAJO=($CAJO/$T)*100;
$TCEBOLLIN=($CCEBOLLIN/$T)*100;
$TCILANTRO=($CCILANTRO/$T)*100;
$TPEREGIL=($CPEREGIL/$T)*100;
$TAJOP=($CAJOP/$T)*100;
$TCELERY=($CCELERY/$T)*100;
$TAJI=($CAJI/$T)*100;
$TCSARTEN=($CSARTEN/$T)*100;



?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>REPORTE</title>

		<style type="text/css">

		</style>
	</head>
   <center> <div class="card text-center info w-50">
  <div class="card-header bg-secondary">
  <button class="btn mr-3 btn-info btn-sm"  >Graficos Materiales</button>  
  </div>
  <center><div class="card-body">
	

<script src="graficas/code/highcharts.js"></script>
<script src="graficas/code/highcharts-3d.js"></script>
<script src="graficas/code/modules/exporting.js"></script>
<script src="graficas/code/modules/export-data.js"></script>

<div id="container" style="height: 500px"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: '<h1>Hortalizas<?php echo " Productos  $T<br><br>";?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'TIPOS DE MATERIALES',
        data: [



          

            
            [ '<?php echo " $NAC $Q ";?>',<?php echo " $TQ ";?>],
            ['<?php echo " $NAS  $M ";?>', <?php echo " $TM ";?>],
            ['<?php echo " $P  $CP ";?>', <?php echo " $TM ";?>],
            ['<?php echo " $NAT $S";?>',<?php echo " $TS ";?> ],
            ['<?php echo " $NAE  $J";?>',<?php echo " $TJ ";?> ],
            ['<?php echo " $QQ  $CU";?>',<?php echo " $TCU ";?> ],
            ['<?php echo " $CURRY  $CUR";?>',<?php echo " $TCUR ";?> ],
            ['<?php echo " $OREGANO  $OR";?>',<?php echo " $TOR ";?> ],
            ['<?php echo " $LECHUGA  $LECHU";?>',<?php echo " $TLECHU ";?> ],
            ['<?php echo " $NAC1  $Q1";?>',<?php echo " $TQ1 ";?> ],
            ['<?php echo " $NAS1  $M1 ";?>', <?php echo " $TM1 ";?>],
            ['<?php echo " $REPOLLO  $REPOLLON ";?>', <?php echo " $TREPOLLO ";?>],
            ['<?php echo " $NREMOLACHA  $CREMOLACHA ";?>', <?php echo " $TREMOLACHA";?>],
            ['<?php echo " $NAJO  $CAJO ";?>', <?php echo " $TAJO";?>],
            ['<?php echo " $NCEBOLLIN $CCEBOLLIN ";?>', <?php echo " $TCEBOLLIN";?>],
            ['<?php echo " $NCILANTRO $CCILANTRO ";?>', <?php echo " $TCILANTRO";?>],
            ['<?php echo " $NPEREGIL $CPEREGIL ";?>', <?php echo " $TPEREGIL";?>],
            ['<?php echo " $NAJOP $CAJOP ";?>', <?php echo " $TAJOP";?>],
            ['<?php echo " $NCELERY $CCELERY ";?>', <?php echo " $TCELERY";?>],
            ['<?php echo " $NAJI $CAJI ";?>', <?php echo " $TAJI";?>],
            ['<?php echo " $NSARTEN $CAJI ";?>', <?php echo " $TAJI";?>],
            ['<?php echo " $NACC  $A";?>',<?php echo " $TA ";?> ]


            
               


 

        ]
    }]
});
		</script>
	</body>
    </div>
  <div class="card-footer text-muted bg-secondary">
  <button class="btn mr-3 btn-danger btn-sm"  >Gestion Humana</button>  
  </div>
</div>
</html>







           

                 






    