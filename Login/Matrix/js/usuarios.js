


 
		$('#myModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  

				  var id = button.data('id') 
				  $('#edit_id').val(id)

				  var usu = button.data('usu') 
				  $('#edit_usu').val(usu)

				  var per = button.data('per') 
				  $('#edit_per').val(per)

				  var cor = button.data('cor') 
				  $('#edit_cor').val(cor)

				  var nom = button.data('nom') 
				  $('#edit_nom').val(nom)

				  var ape = button.data('ape') 
				  $('#edit_ape').val(ape)

				  var tel = button.data('tel') 
				  $('#edit_tel').val(tel)

		         var ced = button.data('ced') 
				  $('#edit_ced').val(ced)
				  
				  var pass = button.data('pass') 
				  $('#edit_pass').val(pass)

		        
    

		})