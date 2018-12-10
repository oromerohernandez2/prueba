<html>

	<head>
		<title>JQuery</title>
		<script type="text/javascript" src="http://localhost:4000/ci/assets/jquery/jquery-3.2.1.js">
		</script>
		<script type="text/javascript">
			
			$(document).ready(function(){
				$("#caja1").keyup(function(){
					var texto=$("#caja1").val();
					var mayus=texto.toUpperCase();
					$("#caja1").val(mayus);
				});
				$("#caja2").keyup(function(){
					var texto=$("#caja2").val();
					var minus=texto.toLowerCase();
					$("#caja2").val(minus);
				});
				
			});		
		</script>
	</head>
	
	
	<body>
	
		Escribe aqui:<input type="text" id="caja1">
		Escribe aqui:<input type="text" id="caja2">
		
		
	</body>
	
</html>