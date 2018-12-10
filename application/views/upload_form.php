<html>
<head><title>Cargar Archivo</title></head>
<body>
<?php echo $error;?>

<?php echo form_open_multipart('http://localhost:4000/ci/index.php/upload/do_upload');?>

<label>ID</label>	<input type="text" name="id"><br>
	<label>Name</label>	<input type="text" name="Name"><br>
	<label>CountryCode</label>	<input type="text" name="CountryCode"><br>
	<label>Disttrict</label>	<input type="text" name="District"><br>
	<label>Population</label>	<input type="text" name="Population"><br>
	<label>Activo</label>	<input type="radio" name="activo" value="1" checked>SI
							<input type="radio" name="activo" value="1">NO<br>
	
	
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Adjuntar Archivo" />

</form>
</body>
</html>

