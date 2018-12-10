<html>
	<head>
	<title>Examen</title>
	</head>
	<body>
	<h1 align="center">Registro de Alumnos </h1><br>
	<h1 align="center">***UTVT*** </h1><br>
		
		<form action="exportarPDF" method="post">
		
			No. Matricula<input type="text" name="matricula"><br>
			Nombre Completo<input type="text" name="nombre"><br>
			Domicilio<input type="text" name="domicilio"><br>
			E-Mail<input type="text" name="correo"><br>
			Sexo<input type="radio" name="sexo" value="Hombre" checked>Hombre
				<input type="radio" name="sexo" value="Mujer">Mujer<br>
			Carrera<select name="carrera">
			<option value="TIC">TIC</option>
			<option value="MECATRONICA">MECATRONICA</option>
			<option value="ENFERMERIA">ENFERMERIA</option>
			<option value="PARAMEDICO">PARAMEDICO</option>
			<option value="NEGOCIOS">NEGOCIOS</option>
			</select><br>
		<input type="submit" value="Enviar">
		</form>
		
	</body>
</html>