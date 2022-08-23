
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM viveres WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['nombre'];
      $row['unidad'];
      $row['cantidad']; 
      $row['usuario'];
      $row['fecha'];
      







     
?>



    <div class="modal fade" id="danny8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                      <span aria-hidden="true">Deseas Eliminar el Producto</span>
                      </button>

                      

                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
                                 

                                   
           <center>
            <form method="post"  action="sql/eliminar-viveres.php?id=<?php echo $id;?>">
Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" readonly placeholder="id"  value="<?php echo $row['id'] ?>" required >
Nombre<input class="form-control form-control-sm" type="text" name="edit_nombre" id="edit_nombre" readonly placeholder="usuario" value="<?php echo $row['nombre'] ?>" required >
Unidad<input class="form-control form-control-sm" type="text" name="edit_unidad" id="edit_unidad" readonly placeholder="unidad" value="<?php echo $row['unidad'] ?>" required >
Cantidad<input class="form-control form-control-sm" type="text" name="edit_cantidad" id="edit_cantidad" readonly placeholder="cantidad" value="<?php echo $row['cantidad'] ?>" required >
Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario"  id="edit_usuario" readonly placeholder="usuario" value="<?php echo $row['usuario'] ?>" required >
Fecha<br><input class="form-control form-control-sm" type="text" name="edit_fecha" id="edit_fecha"  readonly placeholder="fecha" value="  <?php 


echo  date("d-m-Y");

?>" required >
Accion<br><input class="form-control form-control-sm" type="text" name="edit_accion" id="edit_accion" readonly placeholder="nombre" value="Eliminado" required >

  
  
  
  
  
  
  
          </div>   
    </div>
  </div>
   <div class="modal-footer btn btn-secondary">
                 <input class="btn-submit btn btn-danger btn-sm"  type="submit" size="35" value="SI ">
                  
                 <button type="button btn-sm" class="btn-close btn btn-info btn-sm" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">NO</span>
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
    <script src="js/eliminar-usuario.js"></script>
  </body>
</html>