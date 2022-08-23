

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('sql/conexion.php');
$id = $_GET['id'];
   


     $query = "SELECT * FROM proteina WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['nombre'];
      $row['kg'];

      $row['usuario'];
      $row['fecha'];
      


?>



    <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                     <span aria-hidden="true">Editar la Proteina</span>
                      </button>
                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/modificar-proteina.php">
Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" placeholder="id"  value="<?php echo $row['id'] ?>" required >
Nombre<input class="form-control form-control-sm" type="text" name="edit_nombre" id="edit_nombre" placeholder="usuario" value="<?php echo $row['nombre'] ?>" required >
Kg<input class="form-control form-control-sm" type="text" name="edit_kg" id="edit_kg" placeholder="pass" value="<?php echo $row['kg'] ?>" required >

Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario"  id="edit_usuario" placeholder="correo" value="<?php echo $row['usuario'] ?>" required >
Fecha<br><input class="form-control form-control-sm" type="text" name="edit_fecha" id="edit_fecha" placeholder="nombre" value="<?php echo $row['fecha'] ?>" required >

   </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-primary btn-sm"  type="submit" size="35" value="Modificar"> 
                 <input class="btn-reset btn btn-success btn-sm"  type="reset" size="35" value="Limpiar">
                 <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">Cerrar</span>
                                   </button>
</div>
</div> 
</div>
</div>
</div>
</div>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/editar-usuario.js"></script>
  </body>
</html>