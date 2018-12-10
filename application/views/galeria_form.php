<html>
<head>
<body>

	<form action=""method="post" enctype="multipart/form-data">
	
		Seleccionar Imagen:
		<input type="file" name="archivo" size="40">
		<br>
		<input type="submit" value="Insertar">
		
		<h2>Galeria de Imahenes</h2>
		
		<table>
		<tr>
		
		
			<?php
			
				foreach ($res as $obj){
					
					echo"<td>
					<img height='100' width='120' src='http://localhost:4000/ci/assets/images/$obj->Imagen'></td>";
					
				}
			
			?>
			
			
		</tr>
		</table>
	
	</form>
	
</body>	
</head>
</html>