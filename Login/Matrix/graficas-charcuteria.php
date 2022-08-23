

<body style="background-color: silver;">

 
<?php     
   
include ('conexion.php');

$query = "SELECT * FROM charcuteria ;";
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

$query = "SELECT cantidad FROM charcuteria where nombre='Queso';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC='Queso';
  
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

$query = "SELECT * FROM charcuteria where nombre='Mortadela';";
$resulatdo = pg_query($query) or die ("error ");
$CS = pg_num_rows($resulatdo);
$PC=($CS/$C)*100;
$NAS='Mortadela';

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

$query = "SELECT * FROM charcuteria where nombre='Huevos';";
$resulatdo = pg_query($query) or die ("error ");
$CM = pg_num_rows($resulatdo);
$PM=($CM/$C)*100;
$NAM='Huevos';

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

$query = "SELECT * FROM charcuteria where nombre='Salchicha';";
$resulatdo = pg_query($query) or die ("error ");
$CT = pg_num_rows($resulatdo);
$PT=($CT/$C)*100;

$NAT='Salchicha';

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

$query = "SELECT * FROM charcuteria where nombre='Jamon';";
$resulatdo = pg_query($query) or die ("error ");
$CE = pg_num_rows($resulatdo);
$PE=($CE/$C)*100;
$NAE='Jamon';

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

$query = "SELECT * FROM charcuteria where nombre='Salchichón';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$NACC='Salchichon';

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
$T=$Q+$M+$H+$S+$J+$A;




$TQ=($Q/$T)*100;
$TM=($M/$T)*100;
$TS=($S/$T)*100;
$TH=($H/$T)*100;
$TJ=($J/$T)*100;
$TA=($A/$T)*100;

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
  <button class="btn mr-3 btn-info btn-sm"  >Logistica</button>  
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
        text: '<h1>Charcuteria<?php echo " Productos  $T<br><br>";?>'
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
        name: 'TIPOS DE CHARCUTERIA',
        data: [





            
            [ '<?php echo " $NAC $Q ";?>',<?php echo " $TQ ";?>],
            ['<?php echo " $NAS  $M ";?>', <?php echo " $TM ";?>],
            ['<?php echo " $NAM  $H";?>',<?php echo " $TH ";?>],
            ['<?php echo " $NAT $S";?>',<?php echo " $TS ";?> ],
            ['<?php echo " $NAE  $J";?>',<?php echo " $TJ ";?> ],
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







           

                 






    