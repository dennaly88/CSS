<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/bootstrap.min.css">


  <?php
  include('sql/conexion.php');
  $id = $_GET['id'];



  $query = "SELECT * FROM comida WHERE id ='$id'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  $row = pg_fetch_array($result);



  $row['id'];
  $row['nombre'];
  $row['unidad'];
  $row['cantidad'];
  $row['usuario'];
  $row['fecha'];
  $row['accion'];









  ?>



  <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header btn btn-secondary">
          <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Editar Comida</span>
            </button>
          </h5>
        </div>
        <div class="modal-body">
          <div class="card border mb-3" style="max-width: 50rem;">
            <div class="card-body text-secondary">
              <center>
                <form method="post" action="sql/modificar-comidas.php">
                  Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                  Gerencia<input class="form-control form-control-sm" type="text" readonly name="edit_gerencia" id="edit_nombre" placeholder="nombre" value="<?php echo $row['gerencia'] ?>" required>
                  Cantidad<input class="form-control form-control-sm" type="text" name="edit_tipo" id="edit_tipo" placeholder="cantidad" value="<?php echo $row['tipo'] ?>" required>
                  Cantidad<input class="form-control form-control-sm" type="text" name="edit_cantidad" id="edit_cantidad" placeholder="cantidad" value="<?php echo $row['cantidad'] ?>" required>
                  Usuario<input class="form-control form-control-sm" type="text" name="edit_usuario" id="edit_usuario" readonly placeholder="usuario" value="<?php echo $row['usuario'] ?>" required>
                  Fecha<br><input class="form-control form-control-sm" type="text" name="edit_fecha" id="edit_fecha" readonly placeholder="fecha" value="  <?php


                                                                                                                                                            echo  date("d-m-Y");

                                                                                                                                                            ?>" required>




                  Hora<br><input class="form-control form-control-sm" type="text" name="edit_hora" id="edit_hora" readonly placeholder="hora" value="<?php

                                                                                                                                                      date_default_timezone_set("America/Caracas");
                                                                                                                                                      $hora = date('h:i a', time() - 3600 * date('I'));
                                                                                                                                                      print "&nbsp;$hora&nbsp;";

                                                                                                                                                      ?>" required>


                  Entregado a<input class="form-control form-control-sm" type="text" name="edit_entregado" id="edit_entregado" placeholder="" value="">

                  <div class="form-group" id="nombre">


                    <label for="recipient-name" class="col-form-label">Accion</label>
                    <select class="form-control form-control-sm" placeholder name="edit_accion" required>

                      <option selected>Recibido</option>
                      <option selected>En Espera</option>
                      <option selected>Entregado</option>
                      <option selected>Elige una opción</option>

                    </select>
                  </div>


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