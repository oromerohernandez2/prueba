<html>  
<head>
<title>JQUERY</title>
<script type="text/javascript" 
src="http://localhost:4000/ci/assets/jquery/jquery-3.2.1.js">
</script> 
<script>
$(document).ready(function(){
    $("#Obtener").dblclick(function(){
        $.ajax({
		    url: "http://localhost:4000/ci/index.php/Controlador_jquery/recibe/", 
		success: function(result){
				$("#div2").html(result);
				$("#div3").html(result);
				
		}
			});
		});
	});
</script>
</head>
<body>
<input type="button" value="Obtener Texto" id="Obtener"/>
<div id="div1">Este es AJAX</div>
<div id="div2">Este es AJAX</div>
<div id="div3">Este es AJAX</div>
</body></html>