<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />


     <title>Arepera VTV</title>


<body class="">




     </head>


     <center>
          <div class="card border-secondary mb-3" style="max-width: 80rem;">
               <div class="card-header card text-white bg-secondary mb-3">



                    <center><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" onclick="location.href='principal-comidas.php'" style="max-width: 10rem;">
                              <span aria-hidden="true" class="text-light">Control Comidas</span>
                         </button>






               </div>
               <div class="card-body text-secondary">
                    <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>


                    <table id="p" class="table active border-secondary responsive" style="max-width: 80rem" ;>
                         <thead>
                              <tr class="bg-secondary text-white">
                                   <h4>
                                        <td>Id</td>
                                        <center>
                                             <td>Gerencia</td>
                                             <td>Usuario</td>
                                             <td>Tipo</td>
                                             <td>Cantidad</td>
                                             <td>Accion</td>
                                             <td>Fecha</td>
                                             <td>Hora</td>
                                             <td>Entregado a</td>

                                             <td>Opciones</td>
                                   </h4>
                              </tr>
                         </thead>
                         <?php
                         $query = 'SELECT * FROM comida ';
                         $result = pg_query($query) or die('Query failed: ' . pg_last_error());
                         while ($mostrar = pg_fetch_array($result)) {
                              $id = $mostrar['id'];
                              $usu = $mostrar['nombre'];
                              $pass = $mostrar['fecha'];
                              $per = $mostrar['kg'];
                              $per = $mostrar['kg'];

                         ?>

                              <tr>
                                   <center>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <center>

                                             <td><?php echo $mostrar['gerencia'] ?></td>
                                             <center>
                                                  <center>
                                                       <td><?php echo $mostrar['usuario'] ?></td>
                                                       <center>
                                                            <center>
                                                                 <td><?php echo $mostrar['tipo'] ?></td>
                                                                 <center>
                                                                      <center>
                                                                           <td><?php echo $mostrar['cantidad'] ?></td>
                                                                           <center>
                                                                                <center>
                                                                                     <td><?php echo $mostrar['estado'] ?></td>
                                                                                     <center>
                                                                                          <center>
                                                                                               <td><?php echo $mostrar['fecha'] ?></td>
                                                                                               <center>
                                                                                                    <td><?php echo $mostrar['hora'] ?></td>
                                                                                                    <center>
                                                                                                         <td><?php echo $mostrar['entregado'] ?></td>
                                                                                                         <td>
                                                                                                              <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->


                                                                                                              <a href="principal-eliminar-comida.php?id=<?php echo $id; ?>">

                                                                                                                   <button type='button' class='btn btn-danger btn-sm' title="Eliminar">&#x1f5d1;&#xfe0f;</button>


                                                                                                                   <!--__________________________________________________________________________________________________________________-->


                                                                                                                   <!--_____________________________________BOTON EDITAR_________________________________________________________________-->






                                                                                                                   <a href="principal-editar-comida.php?id=<?php echo $id; ?>">
                                                                                                                        <button type='button' class='btn btn-info btn-sm' title="Editar"> &#x1f4dd; </button>




                                                                                                                        <!--__________________________________________________________________________________________________________________-->
                                                                                                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                                                             <div class="modal-dialog" role="document">
                                                                                                                                  <div class="modal-content">
                                                                                                                                       <div class="modal-header btn btn-secondary">
                                                                                                                                            <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal">
                                                                                                                                                      <span aria-hidden="true">Agregar Solicitud</span>
                                                                                                                                                 </button>
                                                                                                                                            </h5>
                                                                                                                                       </div>
                                                                                                                                       <div class="modal-body">
                                                                                                                                            <div class="card border mb-3" style="max-width: 50rem;">
                                                                                                                                                 <div class="card-body text-secondary">
                                                                                                                                                      <center>
                                                                                                                                                           <form method="post" action="sql/principal-comidas.php">
                                                                                                                                                                Id<input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                                                                                                                                                                Usuario<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="" required>
                                                                                                                                                                Contraseña<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="" required>
                                                                                                                                                                Perfil<input class="input form-control" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="" required>
                                                                                                                                                                Correo<input class="input form-control" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="" required>
                                                                                                                                                                Nombre<br><input class="input form-control" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="" required>
                                                                                                                                                                Apellido<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="" required>
                                                                                                                                                                Telefono<input class="input form-control" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="" required>
                                                                                                                                                                Cedula<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="" required>
                                                                                                                                                 </div>
                                                                                                                                            </div>
                                                                                                                                       </div>
                                                                                                                                       <div class="modal-footer btn btn-secondary">
                                                                                                                                            <input class="btn-submit btn btn-primary" type="submit" size="35" value="Modificar">
                                                                                                                                            <input class="btn-reset btn btn-success" type="reset" size="35" value="Limpiar">
                                                                                                                                            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                                                                                                                                 <span aria-hidden="true">Cerrar</span>
                                                                                                                                            </button>
                                                                                                                                       </div>
                                                                                                                                  </div>
                                                                                                                             </div>
                                                                                                                        </div>
               </div>
          </div>

          </form>

          </td>
          <center>
               </tr>

          <?php
                         }
          ?>

          <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog  mb-3" role="document">
                    <div class="modal-content">
                         <!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


                         <div class="modal-header btn btn-secondary mb-3">
                              <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal">
                                   <span aria-hidden="true">Agregar Comida</span>
                         </div>
                         <div class="modal-body">
                              <div class="card border mb-3" style="max-width: 50rem;">
                                   <div class="card-body text-secondary">
                                        <center>
                                             <form method="post" action="sql/crear-comida.php">









                                                  <?php

                                                  $query = 'SELECT * FROM gerencia;';
                                                  $resulatdo = pg_query($query) or die("error ");
                                                  $numReg = pg_num_rows($resulatdo);

                                                  ?>

                                                  <div class="form-group" id="nombre">


                                                       <label for="recipient-name" class="col-form-label">Gerencia</label>
                                                       <select class="form-control form-control-sm" placeholder name="gerencia" required>
                                                            <option selected>...</option>
                                                            <?php
                                                            while ($fila = pg_fetch_array($resulatdo)) {
                                                                 echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                            }
                                                            ?>
                                                       </select>
                                                  </div>

                                                  <!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->











                                                  <?php

                                                  $query = 'SELECT * FROM tipo_comida;';
                                                  $resulatdo = pg_query($query) or die("error ");
                                                  $numReg = pg_num_rows($resulatdo);

                                                  ?>

                                                  <div class="form-group" id="nombre">


                                                       <label for="recipient-name" class="col-form-label">Tipo Comida</label>
                                                       <select class="form-control form-control-sm" placeholder name="tipo" required>
                                                            <option selected>....</option>
                                                            <?php
                                                            while ($fila = pg_fetch_array($resulatdo)) {
                                                                 echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                                            }
                                                            ?>
                                                       </select>
                                                  </div>

                                                  Cantidad<input class="form-control form-control-sm" type="number" name="cantidad" id="number" placeholder="" value="" required>
                                                  Usuario<br><input class="form-control form-control-sm" type="text" readonly name="usuario" id="usuario" placeholder="" value="<?php echo  "    " . $_SESSION['usuario']; ?>" required>
                                                  Fecha<input class="form-control form-control-sm" type="text" readonly name="fecha" id="fecha" placeholder="" value="  <?php


                                                                                                                                                                          echo  date("d-m-Y");

                                                                                                                                                                          ?>" required>
                                                  Hora<input class="form-control form-control-sm" type="text" readonly name="hora" id="hora" placeholder="" value="  <?php

                                                                                                                                                                     date_default_timezone_set("America/Caracas");
                                                                                                                                                                     $hora = date('h:i a', time() - 3600 * date('I'));
                                                                                                                                                                     print "&nbsp;$hora&nbsp;";

                                                                                                                                                                     ?>


                                                                                                                                                                     

                                                                                                                                       " required>
                                                  Accion<input class="form-control form-control-sm" type="text" name="estado" id="estado" readonly placeholder="" value="Recibido" required>






                                                  </select>











                                   </div>
                              </div>
                         </div>
                         <div class="modal-footer btn btn-secondary">
                              <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Agregar">
                              <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
                              <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">Cerrar</span>
                              </button>
                         </div>
                    </div>
               </div>
          </div>
          </form>

          </table>
          <BR>





          <?php

          $query = "SELECT * from comida ";
          $resulatdo = pg_query($query) or die("error ");
          $numReg = pg_num_rows($resulatdo);

          ?>

          <?php
          $total_price = 0;
          while ($fila = pg_fetch_assoc($resulatdo)) {

               $total_price +=  $fila['cantidad'];
          }
          ?>






          <?php

          $query1 = "SELECT * from comida where 'Desayuno'=tipo";

          $resulatdo1 = pg_query($query1) or die("error ");
          $numReg1 = pg_num_rows($resulatdo1);

          ?>

          <?php
          $total = 0;
          while ($fila1 = pg_fetch_assoc($resulatdo1)) {

               $total +=  $fila1['cantidad'];
          }
          ?>





          <?php

          $query2 = "SELECT * from comida where 'Almuerzo'=tipo";

          $resulatdo2 = pg_query($query2) or die("error ");
          $numReg2 = pg_num_rows($resulatdo2);

          ?>





          <?php
          $total_price1 = 0;
          while ($fila2 = pg_fetch_assoc($resulatdo2)) {

               $total_price2 +=  $fila2['cantidad'];
          }
          ?>
          <?php

          $query3 = "SELECT * from comida where 'Cena'=tipo";

          $resulatdo3 = pg_query($query3) or die("error ");
          $numReg3 = pg_num_rows($resulatdo3);

          ?>





          <?php
          $total_price3 = 0;
          while ($fila3 = pg_fetch_assoc($resulatdo3)) {

               $total_price3 +=  $fila3['cantidad'];
          }
          ?>





          <a href="reporte/total-desayunos.php" title="Stock de Comidas" target="_blank">



               <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" style="max-width: 10rem;">
                    <span aria-hidden="true" class="text-light">Desayunos = <?php

                                                                                echo "$total";
                                                                                ?></span>
               </button> </a>







          <a href="reporte/total-almuerzos.php" title="Stock de Comidas" target="_blank">



               <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" style="max-width: 10rem;">
                    <span aria-hidden="true" class="text-light">Almuerzos = <?php

                                                                                echo "$total_price2";
                                                                                ?></span>
               </button> </a>





          <a href="reporte/total-cenas.php" title="Stock de Comidas" target="_blank">



               <button type="button" class="btn-close btn btn-primary btn-sm" data-dismiss="modal" style="max-width: 10rem;">
                    <span aria-hidden="true" class="text-light">Cenas = <?php

                                                                           echo "$total_price3";
                                                                           ?></span>
               </button> </a>





          <a href="reporte/comidas.php" title="Stock de Comidas" target="_blank"> <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" style="max-width: 10rem;">
                    <span aria-hidden="true" class="text-light">Total = <?php

                                                                           echo "$total_price";
                                                                           ?></span>
               </button> </a>






          </button>
          </div>
          </div>
          </div>
          </div>
          </form>

          </table>


          </div>
          </div>





















          <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

</body>
<center>
     <script type="text/javascript">
          $(document).ready(function() {
               $('#p').DataTable();


          });
     </script>