

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

$NCHARCUTERIA='CHARCUTERIA';


$TCHARCUTERIA=$Q+$M+$H+$S+$J+$A;




$TQ=($Q/$TCHARCUTERIA)*100;
$TM=($M/$TCHARCUTERIA)*100;
$TS=($S/$TCHARCUTERIA)*100;
$TH=($H/$TCHARCUTERIA)*100;
$TJ=($J/$TCHARCUTERIA)*100;
$TA=($A/$TCHARCUTERIA)*100;

?>
































   


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
$TCONDIMENTOS=$Q+$M+$H+$S+$J+$A+$CU+$CUR+$OR+$CU;




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




$NCONDIMENTOS='CONDIMENTOS';








?>



   











<?php     
   
include ('conexion.php');

$query = "SELECT * FROM hortaliza ;";
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

$query = "SELECT cantidad FROM hortaliza where nombre='Papa';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC='Papa';
  
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

$query = "SELECT * FROM hortaliza where nombre='Pepino';";
$resulatdo = pg_query($query) or die ("error ");
$CS = pg_num_rows($resulatdo);
$PC=($CS/$C)*100;
$NAS='Pepino';

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

$query = "SELECT * FROM hortaliza where nombre='Platanos';";
$resulatdo = pg_query($query) or die ("error ");
$CM = pg_num_rows($resulatdo);
$PM=($CM/$C)*100;
$P='Platano';

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

$query = "SELECT * FROM hortaliza where nombre='Zanahoria';";
$resulatdo = pg_query($query) or die ("error ");
$CT = pg_num_rows($resulatdo);
$PT=($CT/$C)*100;

$NAT='Zanahoria';

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

$query = "SELECT * FROM hortaliza where nombre='Yuca';";
$resulatdo = pg_query($query) or die ("error ");
$CE = pg_num_rows($resulatdo);
$PE=($CE/$C)*100;
$NAE='Yuca';

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

$query = "SELECT * FROM hortaliza where nombre='Cebolla';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$NACC='Cebolla';

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

$query = "SELECT * FROM hortaliza where nombre='Tomate';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$QQ='Tomate';

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

$query = "SELECT * FROM hortaliza where nombre='Coliflor';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$CURRY='Coliflor';

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

$query = "SELECT * FROM hortaliza where nombre='Brocoli';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$OREGANO='Brocoli';

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

$query = "SELECT * FROM hortaliza where nombre='Lechuga';";
$resulatdo = pg_query($query) or die ("error ");
$CACC = pg_num_rows($resulatdo);
$PACC=($CACC/$C)*100;
$LECHUGA='Lechuga';

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

$query = "SELECT cantidad FROM hortaliza where nombre='Berengena';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$NAC1='Berengena';
  
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

$query = "SELECT cantidad FROM hortaliza where nombre='Repollo';";
$resulatdo = pg_query($query) or die ("error ");
$CC = pg_num_rows($resulatdo);
$PC=($CC/$C)*100;
$REPOLLO='Repollo';
  
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Remolacha';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NREMOLACHA='Remolacha';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Ajo';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAJO='Ajo';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Cebollin';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCEBOLLIN='Cebollin';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Cilantro';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCILANTRO='Cilantro';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Peregil';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NPEREGIL='Peregil';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Ajo Porro';";
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Celery';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NCELERY='Celery';
     
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
   
   $query = "SELECT cantidad FROM hortaliza where nombre='Aji';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAJI='Aji';
     
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
$THORTALIZAS=$Q+$M+$CP+$S+$J+$A+$CU+$CUR+$OR+$TLECHU+$Q1+$REPOLLON+$CREMOLACHA+$CAJO+$CCEBOLLIN+$CCILANTRO+$CPEREGIL+$CAJOP+$CCELERY+$CAJI;




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

$NHORTALIZAS='HORTALIZAS'; 

?>


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
$TMATERIALES=$Q+$M+$CP+$S+$J+$A+$CU+$CUR+$OR+$TLECHU+$Q1+$REPOLLON+$CREMOLACHA+$CAJO+$CCEBOLLIN+$CCILANTRO+$CPEREGIL+$CAJOP+$CCELERY+$CAJI+$CSARTEN;




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


$NMATERIALES='MATERIALES'; 
?>





  

  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

   
   
   ?>
  


      
   <?php     
   
   include ('conexion.php');
   
   $query = "SELECT * FROM proteina ;";
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
   
   $query = "SELECT cantidad FROM proteina where nombre='Esmechar';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAC='Esmechar';
     
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
   
   $query = "SELECT * FROM proteina where nombre='Molida';";
   $resulatdo = pg_query($query) or die ("error ");
   $CS = pg_num_rows($resulatdo);
   $PC=($CS/$C)*100;
   $NAS='Molida';
   
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
   
   $query = "SELECT * FROM proteina where nombre='Guisar';";
   $resulatdo = pg_query($query) or die ("error ");
   $CM = pg_num_rows($resulatdo);
   $PM=($CM/$C)*100;
   $NAM='Guisar';
   
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
   
   $query = "SELECT * FROM proteina where nombre='Pollo Muslo';";
   $resulatdo = pg_query($query) or die ("error ");
   $CT = pg_num_rows($resulatdo);
   $PT=($CT/$C)*100;
   
   $NAT='Pollo Muslo';
   
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
   
   $query = "SELECT * FROM proteina where nombre='Bistec';";
   $resulatdo = pg_query($query) or die ("error ");
   $CE = pg_num_rows($resulatdo);
   $PE=($CE/$C)*100;
   $NAE='Bistec';
   
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
   
   $query = "SELECT * FROM proteina where nombre='Pollo Entero';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $NACC='Pollo Entero';
   
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
   $TPROTEINAS=$Q+$M+$H+$S+$J+$A;
   $NPROTEINAS='PROTEINAS';
   
   
   
   $TQ=($Q/$T)*100;
   $TM=($M/$T)*100;
   $TS=($S/$T)*100;
   $TH=($H/$T)*100;
   $TJ=($J/$T)*100;
   $TA=($A/$T)*100;
   
   ?>
   







   
   
   
  
  
    <?php
    include ('conexion.php');
    $NVIVERES='VIVERES';
?> 

  
<?php     
   
   include ('conexion.php');
   
   $query = "SELECT * FROM viveres ;";
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
   
   $query = "SELECT cantidad FROM viveres where nombre='Aceite';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAC='Aceite';
     
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
   
   $query = "SELECT * FROM viveres where nombre='Vinagre';";
   $resulatdo = pg_query($query) or die ("error ");
   $CS = pg_num_rows($resulatdo);
   $PC=($CS/$C)*100;
   $NAS='Vinagre';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Salsa de Soya';";
   $resulatdo = pg_query($query) or die ("error ");
   $CM = pg_num_rows($resulatdo);
   $PM=($CM/$C)*100;
   $P='Salsa de Soya';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Sardina Lata';";
   $resulatdo = pg_query($query) or die ("error ");
   $CT = pg_num_rows($resulatdo);
   $PT=($CT/$C)*100;
   
   $NAT='Sardina Lata';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Sal';";
   $resulatdo = pg_query($query) or die ("error ");
   $CE = pg_num_rows($resulatdo);
   $PE=($CE/$C)*100;
   $NAE='Sal';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Azucar';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $NACC='Azucar';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Arroz';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $QQ='Arroz';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Pasta Larga';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $CURRY='Pasta Larga';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Pasta Corta';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $OREGANO='Pasta Corta';
   
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
   
   $query = "SELECT * FROM viveres where nombre='Harina Pan';";
   $resulatdo = pg_query($query) or die ("error ");
   $CACC = pg_num_rows($resulatdo);
   $PACC=($CACC/$C)*100;
   $LECHUGA='Harina Pan';
   
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
   
   $query = "SELECT viveres FROM viveres where nombre='Harina Kaly';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $NAC1='Harina Kaly';
     
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
   
   $query = "SELECT cantidad FROM viveres where nombre='Harina la Publerina';";
   $resulatdo = pg_query($query) or die ("error ");
   $CC = pg_num_rows($resulatdo);
   $PC=($CC/$C)*100;
   $REPOLLO='Harina la Publerina';
     
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
      
      $query = "SELECT cantidad FROM viveres where nombre='Harina de Trigo';";
      $resulatdo = pg_query($query) or die ("error ");
      $CC = pg_num_rows($resulatdo);
      $PC=($CC/$C)*100;
      $NREMOLACHA='Harina de Trigo';
        
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
      
      $query = "SELECT cantidad FROM viveres where nombre='Frijoles';";
      $resulatdo = pg_query($query) or die ("error ");
      $CC = pg_num_rows($resulatdo);
      $PC=($CC/$C)*100;
      $NAJO='Frijoles';
        
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
      
      $query = "SELECT cantidad FROM viveres where nombre='Caraotas';";
      $resulatdo = pg_query($query) or die ("error ");
      $CC = pg_num_rows($resulatdo);
      $PC=($CC/$C)*100;
      $NCEBOLLIN='Caraotas';
        
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
   $T=$Q+$M+$CP+$S+$J+$A+$CU+$CUR+$OR+$TLECHU+$Q1+$REPOLLON+$CREMOLACHA+$CAJO;
   
   
   
   
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
  <button class="btn mr-3 btn-info btn-sm">Graficas Generales</button>  
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
        text: '<h1> Arepera VTV<br><?php echo " Productos Totales $T<br><br>";?>'
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


            



            
            [ '<?php echo "$NCHARCUTERIA $TCHARCUTERIA ";?>',<?php echo " $TQ ";?>],
            ['<?php echo " $NCONDIMENTOS $TCONDIMENTOS ";?>',<?php echo " $TA ";?> ],
            ['<?php echo " $NHORTALIZAS  $THORTALIZAS";?>',<?php echo " $TH ";?>],
            ['<?php echo " $NMATERIALES  $TMATERIALES";?>',<?php echo " $TS ";?> ],
            ['<?php echo " $NPROTEINAS  $TPROTEINAS";?>',<?php echo " $TJ ";?> ],
            ['<?php echo " $NVIVERES $TCONDIMENTOS ";?>',<?php echo " $TA ";?> ]

            

            


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







           

                 






    