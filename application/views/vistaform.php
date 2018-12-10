<html>
<head>
<title>Datos Alumno</title>

    <body>
    
        <form action="recibedatos" method="post">
            
            Mi nombre<input type="text" name="nombre" placeholder="Nombre"> <input type="text" name="apellido" placeholder="Apelllido">
            
            <br><br>
            
        
            Sexo<select name="sexo">
            
                    <option value="masculino">Hombre</option>
                    <option value="femeninio">Hombre</option>
            
                </select>
            <br><br>
            
            Fecha de Nacimiento
            <input type="text" name="dia" placeholder="Dia">
            
            <select name="mes">
            
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="abril">Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                    <option value="julio">Julio</option>
                    <option value="agosto">Agosto</option>
                    <option value="septiembre">Septiembre</option>
                    <option value="octubre">Octubre</option>
                    <option value="noviembre">Noviembre</option>
                    <option value="diciembre">Diciembre</option>
                    
            
                </select>
            <input type="text" name="ano" placeholder="Año">
            <br><br>
            
            Vivo en: 
               <select name="pais">
            
                    <option value="Argentina">Argentina</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Belgica">Belgica</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Colombia">Colombia</option>
                   <option value="Chile">Chile</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Venezuela">Venezuela</option>
                    
                    
            
                </select>
            
            <br><br>
            
            Codigo Postal<input type="text" name="codp" placeholder="Codigo Postal"> 
            
            <br>
            <br>
            <input type="submit" value="Aceptar"> 
        
        </form>
        
    </body>
</head>
</html>