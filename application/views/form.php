<html>
<head>
<title>Formulario Encriptado</title>
</head>
<body>
<h1>Encriptar</h1>
<form action="exportarPDF" method="post">
		
		usuario:<input type="text" name='user'>
		<br>
		contraseña:<input type="password" name="contraseña">
		<br>
		correo:<input type="text" name="correo">
		<br>
		
		<input type="radio" name="activo" value="1"> Si
		<input type="radio" name="activo" value="0"> No
		
		 <input type="submit" value="Encriptar">
		 <input type="reset" value="Cancelar">

</body>
</html>