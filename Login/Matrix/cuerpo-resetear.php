<?php

//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if (!isset($_SESSION['usuario'])) {

    header('Location: index.php');

    exit();
}

?>

<br><br><br>
<center>
    <div class="card text-center info w-75">
        <div class="card-header bg-secondary">
            <button class="btn mr-3 btn-primary btn-sm">Resetear</button>
        </div>
        <div class="card-body">

            <body>











                <img src="img/aguas.jpg" class="img-fluid" alt="Responsive image" onclick="CanContinue1 ()">
                <script type="text/javascript">
                    function CanContinue1() {
                        var confRet = window.confirm("Deseas resetear los Contadores de Agua Potable ,Ten en cuenta que no tendras respaldo de la informacion  ¿Estas Seguro?");
                        if (confRet) {
                            window.location = 'sql/eliminar-aguas-totales.php?id=<?php echo $mostrar['id']; ?>';

                        } else {


                        }
                    }
                </script>


                <img src="img/comidas.jpg" class="img-fluid" alt="Responsive image" onclick="CanContinue()">
                <script type="text/javascript">
                    function CanContinue() {
                        var confRet = window.confirm("Deseas resetear los Contadores de Comida Ten en cuenta que no tendras respaldo de la informacion ¿Estas Seguro?");
                        if (confRet) {
                            window.location = 'sql/eliminar-comidas-total.php?id=<?php echo $mostrar['id']; ?>';

                        } else {


                        }
                    }
                </script>




















            </body>

        </div>
        <div class="card-footer text-muted bg-secondary">
            <button class="btn mr-3 btn-danger btn-sm">Gestion Humana</button>
        </div>
    </div>