<link rel="shortcut icon" href="img/icon-vtv.ico">

<link rel="shortcut icon" href="css/menu.css">
<link rel="stylesheet" href="js/all.js">

<!--IMPORTANTE MUY CAMBIAR COLOR A LA BARRA DE BOOSTRANG-->

<!--IMPORTANTE MUY -->

<!--IMPORTANTE MUY style="background-color:#474a49 !important;" role="navigation" opacity="0.9";-->

</div>

<nav class="navbar navbar-default">
      <!--  BARRA DE ARRIBA ANTES DEL NAV DEL MENU-->
      <br>
</nav>



















<nav class="navbar navbar-expand-md navbar-white   sticky-top">
      <a>
            <img src="img/logo-menu.png"><!--  IMAGEN DEL MENUMENU-->
      </a>
      <a>

            <button class="btn-close btn btn-danger btn-sm" onclick="location.href='principal.php'"><?php echo  "    " . $_SESSION['usuario']; ?></button>



      </a>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">






                  <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-alimentos.php'">Alimentos</button>
                  <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-inventario.php'">Inventario</button>
                  <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-contador.php'">Contador</button>

                  <!--  BARRA DE ARRIBA ANTES DEL NAV DEL MENU <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-comidas.php'">Control de Comidas</button>-->
                  <!-- 
 <!-- <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-aguas.php'">Control de Botellones</button>-->
                  <button class="mr-3 btn btn-info btn-sm" onclick="location.href='principal-adm.php'">Administrar</button>

                  <a href="calculadora.php" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=600'); return false;">

                        <button class="mr-3 btn btn-info btn-sm">Calculadora</button>




                  </a>







                  <a href="calendario/calendario.php" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=600'); return false;">

                        <button class="mr-3 btn btn-info btn-sm"> Calendario</button>




                  </a>











                  <button class="mr-3 btn btn-danger btn-sm" onclick="location.href='principal-resetear.php'">Resetear</button>

                  <button class="mr-3 btn btn-info btn-sm" onclick="location.href='#'"><i class="fas fa-cog fa-spin"></i></button>






















                  <a>

                  </a>















      </div>

      <button class="btn btn " type="submit" text="white">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">








      </button>




      <span style="font-size: 1.5em; color: white;">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook "></i></a>
      </span> &nbsp; &nbsp;

      <span style="font-size: 1.5em; color: white;">
            <a href="https://twitter.com/home?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
      </span> &nbsp; &nbsp;


      <span style="font-size: 1.5em; color: white;">
            <a href="https://www.instagram.com/?hl=es" target="_blank"><i class="fab fa-instagram""></i></a>
            </span>  &nbsp; &nbsp;



            <span style=" font-size: 1.5em; color: white;">
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
      </span> &nbsp;&nbsp;


      <span style="font-size: 1.5em; color: white;">
            <a href="https://www.youtube.com/" target="_blank"> </a>
      </span> &nbsp;&nbsp;







      <button class="dan3 btn btn-danger btn-sm" onclick="location.href='scrips/cerrar.php'">Salir</button>

      </div>

</nav>