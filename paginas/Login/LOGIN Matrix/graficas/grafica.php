<body style="background-color: silver;">


  <?php

  include('conexion.php');

  $query = "SELECT * FROM  charcuteria;";
  $resulatdo = pg_query($query) or die("er ");
  $C = pg_num_rows($resulatdo);

  if ($C > 0) {


  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>



  <?php
  }
  ?>

  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where Nombre='Queso'; ";
  $resulatdo = pg_query($query) or die("e ");
  $CC = pg_num_rows($resulatdo);
  $PC = ($CC / $C) * 100;
  $NAC = 'Queso';

  if ($CC > 0) {


  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
  ?>
  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where nombre='Mortadela'; ";
  $resulatdo = pg_query($query) or die("7 ");
  $CS = pg_num_rows($resulatdo);
  $PC = ($CS / $C) * 100;
  $NAS = 'Mortadela';

  if ($CS > 0) {


  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
  ?>
  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where nombre='Jamon';";
  $resulatdo = pg_query($query) or die("error ");
  $CM = pg_num_rows($resulatdo);
  $PM = ($CM / $C) * 100;
  $NAM = 'Jamon';

  if ($CM > 0) {

  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
  ?>


  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where nombre='Mortadela';";
  $resulatdo = pg_query($query) or die("error ");
  $CT = pg_num_rows($resulatdo);
  $PT = ($CT / $C) * 100;

  $NAT = 'Mortadela';

  if ($CT > 0) {



  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
  ?>



  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where nombre='Mortadela';";
  $resulatdo = pg_query($query) or die("3");
  $CE = pg_num_rows($resulatdo);
  $PE = ($CE / $C) * 100;
  $NAE = 'Almacen Electricidad';

  if ($CE > 0) {


  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
  ?>
  <?php

  include('conexion.php');

  $query = "SELECT  cantidad FROM charcuteria where nombre='Mortadela';";
  $resulatdo = pg_query($query) or die("8 ");
  $CACC = pg_num_rows($resulatdo);
  $PACC = ($CACC / $C) * 100;
  $NACC = 'Almacen Central';

  if ($CACC > 0) {


  ?>

    <?php
    while ($fila = pg_fetch_array($resulatdo)) {
    }
    ?>


  <?php
  }
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

  <body style="background-color: silver;">

    <script src="graficas/code/highcharts.js"></script>
    <script src="graficas/code/highcharts-3d.js"></script>
    <script src="graficas/code/modules/exporting.js"></script>
    <script src="graficas/code/modules/export-data.js"></script>

    <div id="container" style="height: 700px"></div>


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
          text: '<h1>ALMACENES DE SERVICIO GENERAL<?php echo " Productos  $C<br><br>"; ?>'
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
          name: 'ALMACENES',
          data: [


            ['<?php echo " $NAC $CC "; ?>', <?php echo " $CC "; ?>],
            ['<?php echo " $NAS  $CS "; ?>', <?php echo " $CS "; ?>],
            ['<?php echo " $NAM  $CM"; ?>', <?php echo " $CM "; ?>],
            ['<?php echo " $NAT $CT"; ?>', <?php echo " $CT "; ?>],
            ['<?php echo " $NAE  $CE"; ?>', <?php echo " $CE "; ?>],
            ['<?php echo " $NACC  $CACC"; ?>', <?php echo " $CACC "; ?>]



          ]
        }]
      });
    </script>
  </body>

  </html>