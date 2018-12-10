<html>  
<head>
<title>Formulario Modal</title>
<script type="text/javascript" src="http://localhost:4000/ci/assets/jquery/jquery-3.2.1.js"></script> 
<link rel="stylesheet" href="http://localhost:4000/ci/assets/jquery/bootstrap.min.css"></script> 
<script src="http://localhost:4000/ci/assets/jquery/bootstrap.min.js"></script> 
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		$.ajax({
			type: "POST",
			url: "http://localhost:4000/ci/index.php/Controlador_jquery/recibe",
			data: $('#formu').serialize(),
			success: function(result){
				$("#div1").html(result)
				$("#ventana-modal").modal('hide');
			}
		});
	});
});
</script></head><body>

<div id="ventana"><button type="button" 
data-toggle="modal" data-target="#ventana-modal">Formulario Modal</button></div>
<div id="ventana-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Introduce tu datos</h3>
			</div>
			<div class="modal-body">
				<form class="ventana" name="ventana" id="formu">
					Nombre: <input type="text" name="nombre"><br><br>
					Contraseña <input type="password" name="contrasena"><br><br>
					E-Mail <input type="text" name="correo"><br><br>
					Activo: <input type="radio" name="activo" value="1">SI
					<input type="radio" name="activo" value="0">NO
					
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" id="submit">Enviar</button>
				<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
			</div>
		</div>
	</div>
</div>
<div id="div1"> </div>
</body>
</html>