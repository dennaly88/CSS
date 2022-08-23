<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/bootstrap.min.css">


  <?php
  include('sql/conexion.php');
  $id = $_GET['id'];



  $query = "SELECT * FROM usuarios WHERE id ='$id'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  $row = pg_fetch_array($result);



  $row['id'];
  $row['usuario'];
  $row['pass'];
  $row['perfil'];
  $row['correo'];
  $row['nombres'];
  $row['apellidos'];
  $row['telefono'];
  $row['cedula'];


  ?>



  <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header btn btn-secondary">
          <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Editar Usuario</span>
            </button>
          </h5>
        </div>
        <div class="modal-body">
          <div class="card border mb-3" style="max-width: 50rem;">
            <div class="card-body text-secondary">
              <center>
                <form method="post" action="sql/modificar-usuario.php">
                  Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                  Usuario<input class="form-control form-control-sm" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="<?php echo $row['usuario'] ?>" required>
                  Contraseña<input class="form-control form-control-sm" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="<?php echo $row['pass'] ?>" required>
                  Perfil<input class="form-control form-control-sm" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="<?php echo $row['perfil'] ?>" required>
                  Correo<input class="form-control form-control-sm" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="<?php echo $row['correo'] ?>" required>
                  Nombre<br><input class="form-control form-control-sm" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="<?php echo $row['nombres'] ?>" required>
                  Apellido<input class="form-control form-control-sm" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="<?php echo $row['apellidos'] ?>" required>
                  Telefono<input class="form-control form-control-sm" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="<?php echo $row['telefono'] ?>" required>
                  Cedula<input class="form-control form-control-sm" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="<?php echo $row['cedula'] ?>" required>
            </div>
          </div>
        </div>
        <div class="modal-footer btn btn-secondary">
          <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Modificar">
          <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/editar-usuario.js"></script>
  </body>

</html>