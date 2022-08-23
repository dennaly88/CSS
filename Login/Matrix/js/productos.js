$(function() {
			load(1);
		});
		function load(page){
			var query=$("#q").val();
			var per_page=10;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_productos.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}


		$('#myModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  

				  var tipo = button.data('tipo') 
				  $('#edit_tipo').val(tipo)

				  var cod = button.data('cod') 
				  $('#edit_cod').val(cod)

				  var alm = button.data('alm') 
				  $('#edit_alm').val(alm)

				  var fec = button.data('fec') 
				  $('#edit_fec').val(fec)

				  var cant = button.data('cant') 
				  $('#edit_cant').val(cant)

				  var mar = button.data('mar') 
				  $('#edit_mar').val(mar)

				  var nom = button.data('nom') 
				  $('#edit_nom').val(nom)

				  var id = button.data('id') 
				  $('#edit_id').val(id)

		         var usu = button.data('usu') 
				  $('#edit_usu').val(usu)

		         var gere = button.data('gere') 
				  $('#edit_gere').val(gere) 

				  var des = button.data('des') 
				  $('#edit_des').val(des)  

				  var div = button.data('div') 
				  $('#edit_div').val(div) 

				  var bie = button.data('bie') 
				  $('#edit_bie').val(bie)



				  



				  
                  
                  
            

		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		