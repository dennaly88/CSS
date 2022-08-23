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



                <center><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" onclick="location.href='principal-aguas.php'" style="max-width: 10rem;">
                        <span aria-hidden="true" class="text-light">Control del Agua</span>
                    </button>






            </div>
            <div class="card-body text-secondary">
                <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>


                <table id="p" class="table active border-secondary responsive" style="max-width: 80rem" ;>
                    <thead>
                        <tr class="bg-secondary text-white">
                            <h4>
                                <center>
                                    <td>Id</td>

                                    <td>Gerencia</td>
                                    <td>Usuario</td>

                                    <td>Botellones</td>
                                    <td>Accion</td>
                                    <td>Fecha</td>
                                    <td>Hora</td>
                                    <td>Entregado a</td>

                                    <td>Opciones</td>
                            </h4>
                        </tr>
                    </thead>
                    <?php
                    $query = 'SELECT * FROM agua ';
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
                                                    <td><?php echo $mostrar['cantidad'] ?></td>
                                                    <center>
                                                        <center>
                                                            <td><?php echo $mostrar['estado'] ?></td>
                                                            <td><?php echo $mostrar['fecha'] ?></td>

                                                            <td><?php echo $mostrar['hora'] ?></td>
                                                            <td><?php echo $mostrar['entregado'] ?></td>
                                                            <td>
                                                                <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->


                                                                <a href="principal-eliminar-agua.php?id=<?php echo $id; ?>">

                                                                    <button type='button' class='btn btn-danger btn-sm' title="Eliminar">&#x1f5d1;&#xfe0f;</button>


                                                                    <!--__________________________________________________________________________________________________________________-->


                                                                    <!--_____________________________________BOTON EDITAR_________________________________________________________________-->






                                                                    <a href="principal-editar-aguas.php?id=<?php echo $id; ?>">
                                                                        <button type='button' class='btn btn-info btn-sm' title="Editar"> &#x1f4dd; </button>




                                                                        <!--__________________________________________________________________________________________________________________-->
                                                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header btn btn-secondary">
                                                                                        <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal">
                                                                                                <span aria-hidden="true"></span>
                                                                                            </button>
                                                                                        </h5>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="card border mb-3" style="max-width: 50rem;">
                                                                                            <div class="card-body text-secondary">
                                                                                                <center>

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
                            <span aria-hidden="true">Agregar Botellones</span>
                    </div>
                    <div class="modal-body">
                        <div class="card border mb-3" style="max-width: 50rem;">
                            <div class="card-body text-secondary">
                                <center>
                                    <form method="post" action="sql/crear-agua.php">









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













                                        Cantidad<input class="form-control form-control-sm" type="number" name="cantidad" id="number" placeholder="" value="" required>
                                        Usuario<br><input class="form-control form-control-sm" type="text" readonly name="usuario" id="usuario" placeholder="" value="<?php echo  "    " . $_SESSION['usuario']; ?>" required>
                                        Fecha<input class="form-control form-control-sm" type="text" readonly name="fecha" id="fecha" placeholder="" value="  <?php


                                                                                                                                                                echo  date("d-m-Y");

                                                                                                                                                                ?>" required>



                                        Hora<input class="form-control form-control-sm" type="text" readonly name="hora" id="hora" placeholder="" value="  <?php


                                                                                                                                                            date_default_timezone_set("America/Caracas");
                                                                                                                                                            $hora = date('h:i a', time() - 3600 * date('I'));
                                                                                                                                                            print "&nbsp;$hora&nbsp;";

                                                                                                                                                            ?>" required>





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

        $query = "SELECT * from agua ";

        $resulatdo = pg_query($query) or die("error ");
        $numReg = pg_num_rows($resulatdo);

        ?>

        <?php
        $total_price = 0;
        while ($fila = pg_fetch_assoc($resulatdo)) {

            $total_price +=  $fila['cantidad'];
        }
        ?>




































        <a href="reporte/aguas.php" title="Total de Aguas" target="_blank"> <button type="button" class="btn-close btn btn-info btn-sm" data-dismiss="modal" style="max-width: 10rem;">
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