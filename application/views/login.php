<html>
<head><title>Mi pagina</title></head>
<body>
<h1>ACCESO AL SISTEMA</h1>
<?php
	echo form_open("controlador_session/iniciar");
	echo form_label("Usuario: ");
	echo form_input("usuario");
	echo "<br>";	
	echo form_label("Constraseña: ");
	echo form_password("password");	
	echo "<br>"; 	echo "<br>";
	echo form_submit("Submit","Aceptar");
	echo form_reset("Reset","Cancelar");
	echo form_close();
?>
</body>
</html>
