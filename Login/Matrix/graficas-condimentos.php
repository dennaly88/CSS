

<body style="background-color: silver;">


<?php     
   
include ('conexion.php');

$query = "SELECT * FROM condimento ;";
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

$query = "SELECT cantidad FROM condimento where nombre='Laurel';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC='Laurel';
  
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

$query = "SELECT * FROM condimento where nombre='Comino';";
$resulatdo = pg_query($query) or die ("error ");
$CS = pg_num_rows($resulatdo);
$PC=($CS/$C)*100;
$NAS='Comino';

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

$query = "SELECT * FROM condimento where nombre='Adobo';";
$resulatdo = pg_query($query) or die ("error ");
$CM = pg_num_rows($resulatdo);
$PM=($CM/$C)*100;
$NAM='Adobo';

if($CM>0){

  ?>
  
    <?php
    while ($fila=pg_fetch_array($resulatdo)){
        $H=$fila['cantidad'];  
    }
    ?>
    

    <?php
  }
?> 


<?php     
   
include ('conexion.php');

$query = "SELECT * FROM condimento where nombre='Color';";
$resulatdo = pg_query($query) or die ("error ");
$CT = pg_num_rows($resulatdo);
$PT=($CT/$C)*100;

$NAT='Color';

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

$query = "SELECT * FROM condimento where nombre='Ajo en Polvo';";
$resulatdo = pg_query($query) or die ("error ");
$CE = pg_num_rows($resulatdo);
$PE=($CE/$C)*100;
$NAE='Ajo en Polvo';

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

$query = "SELECT * FROM condimento where nombre='Salsa para Pasta';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$NACC='Salsa para Pasta';

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

$query = "SELECT * FROM condimento where nombre='Cubito';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$QQ='Cubito';

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

$query = "SELECT * FROM condimento where nombre='Curry';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$CURRY='Curry';

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

$query = "SELECT * FROM condimento where nombre='Oregano';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$OREGANO='Oregano';

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

$query = "SELECT * FROM condimento where nombre='Carmencita';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$CARMEN='Carmencita';

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
$T=$Q+$M+$H+$S+$J+$A+$CU+$CUR+$OR+$CU;




$TQ=($Q/$T)*100;
$TM=($M/$T)*100;
$TS=($S/$T)*100;
$TH=($H/$T)*100;
$TJ=($J/$T)*100;
$TA=($A/$T)*100;
$TCU=($CU/$T)*100;
$TCUR=($CUR/$T)*100;
$TOR=($OR/$T)*100;
$TCU=($CU/$T)*100;

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
  <button class="btn mr-3 btn-info btn-sm"  >Graficos Condimentos</button>  
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
        text: '<h1>Condimentos<?php echo " Productos  $T<br><br>";?>'
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
        name: 'TIPOS DE CONDIMENTOS',
        data: [



          

            
            [ '<?php echo " $NAC $Q ";?>',<?php echo " $TQ ";?>],
            ['<?php echo " $NAS  $M ";?>', <?php echo " $TM ";?>],
            ['<?php echo " $NAM  $H";?>',<?php echo " $TH ";?>],
            ['<?php echo " $NAT $S";?>',<?php echo " $TS ";?> ],
            ['<?php echo " $NAE  $J";?>',<?php echo " $TJ ";?> ],
            ['<?php echo " $QQ  $CU";?>',<?php echo " $TCU ";?> ],
            ['<?php echo " $CURRY  $CUR";?>',<?php echo " $TCUR ";?> ],



            ['<?php echo " $OREGANO  $OR";?>',<?php echo " $TOR ";?> ],
            ['<?php echo " $CARMEN  $CU";?>',<?php echo " $TCU ";?> ],




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







           

                 






    