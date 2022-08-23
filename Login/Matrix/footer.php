<footer class=""  >


 

         
                     
<center>
                     
<button type="button" class="btn-close btn btn-info active btn-sm" data-dismiss="modal" >
                                 <span aria-hidden="true" class="text-white"><?php echo  "    " .$count ?></span>
                    </button>
                                
                      <button type="button" class="btn-close btn btn-danger active btn-sm" data-dismiss="modal" >
                                       <span aria-hidden="true" >© VTV Canal 8 ©</span>
                      </button>
                      <button type="button" class="btn-close btn btn-info active btn-sm" data-dismiss="modal" >
                                 <span aria-hidden="true" class="text-white">
                     

                                             <?php 


                                                   echo  date("d-m-Y");

                                             ?>
                                             <?php 

                                                   date_default_timezone_set("America/Caracas");
                                                   $hora = date('h:i a',time() - 3600*date('I'));
                                                   print "&nbsp;$hora&nbsp;"; 

                                             ?>
                                       </span>
                </button>

                






</footer>










