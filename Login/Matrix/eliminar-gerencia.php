
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <?php
include ('conexion.php');
$id = $_GET['id'];




$query = "SELECT * FROM gerencia WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
     $row = pg_fetch_array($result) ;

     

      $row['id'] ;
      $row['nombre'];
      $row['sigla'];
      







     
?>



    <div class="modal fade" id="danny8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header btn btn-secondary">
                      <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" >
                      <span aria-hidden="true">Deseas Eliminar la Gerencia</span>
                      </button>

                      

                      </h5>  
                              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
                                 

                                   
           <center>
            <form method="post"  action="sql/eliminar-gerencia.php?id=<?php echo $id;?>">
            Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" readonly placeholder="id"  value="<?php echo $row['id'] ?>" required >
Nombre<input class="form-control form-control-sm" type="text" name="edit_nombre" id="edit_nombre" readonly placeholder="usuario" value="<?php echo $row['nombre'] ?>" required >
Sigla<br><input class="form-control form-control-sm" type="text" name="edit_siglas" id="edit_accion" readonly placeholder="n" value="<?php echo $row['siglas'] ?>" required >

  
  
  
  
  
  
  
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