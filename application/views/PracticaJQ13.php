<html>  
<head>
<title>JQUERY</title>
<script type="text/javascript" 
src="http://localhost:4000/ci/assets/jquery/jquery-3.2.1.js">
</script> 
<script>
$(document).ready(function(){
    $("#formu").submit(function(e){
		e.preventDefault();
        $.ajax({
url: "http://localhost:4000/ci/index.php/controlador_jquery/recibe", 
			type: "POST",
			data: $("#formu").serialize(),
			success: function(result){
				$("#div1").html(result);}
}); }); });
</script></head><body>
<form id ="formu">
	Nombre: <input type="text" name="nombre"><br>
	Apellido: <input type="text" name="apellido"><br>
	E-Mail: <input type="text" name="correo"><br>
	<input type="submit" value="Enviar" id="Enviar"/>
</form>
<div id="div1">Este es AJAX</div>
</body></html>