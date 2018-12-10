<html>
<title><head>Resultados</title></head>
<body>
<h1>Reportes de ciudades</h1>
<a href="controlador_pdf/exportarPDF">Generar excel</a>
<table border="1">
<tr><th>ID</th><th>Name</th><th>CountryCode</th>
<th>District</th><th>Population</th><th>Activo</th><th>Imagen</th></tr>
<?php
foreach($res as $obj){
echo"<tr>";
echo"<th>".$obj->ID."</th>";
echo"<th>".$obj->Name."</th>";
echo"<th>".$obj->CountryCode."</th>";
echo"<th>".$obj->District."</th>";
echo"<th>".$obj->Population."</th>";


	
	if($obj->activo==1){
		$act="Si";
		
	}
	else{
		$act="NO";
	}
	echo"<th>".$act."</th>";
	
	echo"<th><img width='30' height='30'";
	
echo"src='http://localhost:4000/ci/assets/images/".$obj->Imagen."'></th>";
	echo"</tr>";
}
?>
</table>
</body>
</html>