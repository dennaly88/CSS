
<!DOCTYPE html>
<link rel="shortcut icon" href="img/FAVicon.ico"> 
<title>Arepera VTV</title>
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/fondo-login.css" crossorigin="anonymous">
<meta charset="utf-8">

<?php
unset($usu);
$usu1=$_GET["usu"];





      if($usu1<8){

       
    } else{

require ("mensajes/error-usuario.php");



    }


   
     
?>




<br><br><br>


<center><div class="card" style="width: 28rem;">
  <img class="card-img-top" src="..." alt="">
  <div class="card-body">
    
  <div class="modal-header btn btn-secondary mb-3">
  <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">Registrar Usuario Nuevo</span>
</button>
              </div>
                              <div class="modal-body">
                                <div class="card border mb-3" style="max-width: 50rem;">
                                 <div class="card-body text-secondary">
           <center>
            <form method="post"  action="sql/crear-usuario.php">


              
               Usuario<input class="form-control form-control-sm" type="text" name="usu" id="usu" placeholder="" value="" required >
               Contraseña<input class="form-control form-control-sm" type="password" name="pass" id="pass" placeholder="" value="" required >
                                  

               <div class="form-group">

            
<label for="recipient-name" class="col-form-label">Perfil:</label>
  <select class="form-control form-control-sm" placeholder name="per" required>
        <option selected>Elige una opción</option>
        <option selected>basico</option>
        <option selected>administrador</option>
        <option selected>coordinador</option>
                     
  </select>
</div>
                              Correo<input class="form-control form-control-sm" type="email" name="cor"  id="cor" placeholder="" value="" required >
                              Nombre<br><input class="form-control form-control-sm" type="text" name="nom" id="nom" placeholder="" value="" required >
                              Apellido<input class="form-control form-control-sm" type="text" name="ape" id="ape" placeholder="" value="" required >
                              
                              Telefono<br><input class="form-control form-control-sm" type="tel" name="tel" list="tel">





<datalist id="tel">

<option value="(0414) ">

<option value="(0424) ">

<option value="(0416) ">

<option value="(0426) ">

<option value="(0412) ">

</datalist>

<br>


                              
                              
                              Cedula<input class="form-control form-control-sm" type="text" name="ced" id="ced" placeholder="" value="" required ><br>
</div> 
</div>
</div>
<div class="modal-footer btn btn-secondary">
<input class="btn-submit btn btn-primary btn-sm"  type="submit" size="35" value="Crear">
<input class="btn-reset btn btn-success btn-sm"  type="reset" size="35" value="Limpiar">
<button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">Cerrar</span>
</button>
</div>
</div>         
</div>
</div>
</form>
                                                                                            
</table>



  </div>
</div>





</html>











</div>
</div>
