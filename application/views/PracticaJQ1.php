<html>
<head>
<title>JQUERY</title>
<script src="http://localhost:4000/ci/assets/jquery/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){			
				$("#img1").mouseover(function(){
					$("#img1").attr("width",200);
					$("#img1").attr("height",200);
				});
				$("#img1").mouseout(function(){
					$("#img1").attr("width",100);
					$("#img1").attr("height",110);
				});
				$("#img1").click(function(){
					$("#img1").remove();
					
				});
				$("#img2").mouseover(function(){
					$("#img2").attr("width",200);
					$("#img2").attr("height",200);
				});
				$("#img2").mouseout(function(){
					$("#img2").attr("width",100);
					$("#img2").attr("height",110);
				});
				$("#img2").click(function(){
					$("#img2").remove();
					
				});
				$("#img3").mouseover(function(){
					$("#img3").attr("width",200);
					$("#img3").attr("height",200);
				});
				$("#img2").mouseout(function(){
					$("#img3").attr("width",100);
					$("#img3").attr("height",110);
				});
				$("#img3").click(function(){
					$("#img3").remove();
					
				});
				$("#in1").click(function(){
					$("img").remove();
					
				});
				$("#in2").click(function(){
					$("img:first").remove();
					
				});
				$("#in3").click(function(){
					$("img:last").remove();
					
				});
				$("#in4").click(function(){
					$("img:not(:first)").remove();
					
				});
				$("#in5").click(function(){
					$("img:even").remove();
					
				});
				$("#in6").click(function(){
					$("img:odd").remove();
					
				});
				$("#in7").click(function(){
					$("img:eq(1)").remove();
					
				});
				$("#in8").click(function(){
					$("img:gt(0)").remove();
					
				});
				$("#in9").click(function(){
					$("img:lt(2)").remove();
					
				});
				$("#caja1").keyup(function(){
					//alert("Hola");
					var texto =$("#caja1").val();
					var mayus = texto.toUpperCase();
					$("#caja1").val(mayus);
				});
				$("#caja2").keyup(function(){
					var texto =$("#caja2").val();
					var mayus = texto.toLowerCase();
					$("#caja2").val(mayus);
				});
				
    });
</script>
</head>
<body>
    <img id="img1" src="http://localhost:8080/ci/assets/images/cap.jpg" width="100" height="110" > <br>
    <img id="img2" src="http://localhost:8080/ci/assets/images/bdfgfg.jpg" width="100" height="110"> <br>
    <img id="img3" src="http://localhost:8080/ci/assets/images/fjfgdf.gif" width="100" height="110"><br>
	<input id='in1' type="button" value="Eliminar Todas"><br>
	<input id='in2' type="button" value="Eliminar la primera"><br>
	<input id='in3' type="button" value="Eliminar elimina la ultima"><br>
	<input id='in4' type="button" value="Eliminar todos menos el primero"><br>
	<input id='in5' type="button" value="Eliminar impar"><br>
	<input id='in6' type="button" value="Eliminar par"><br>
	<input id='in7' type="button" value="Eliminar la 2"><br>
	<input id='in8' type="button" value="Eliminar mayor1"><br>
	<input id='in9' type="button" value="Eliminar menor a 3"><br><br>
//	Escribe un texto:
<input type="text" id="caja1">
<br><br>
	Escribe un texto:
//<input type="text" id="caja2">
	
	
</body>
</html>