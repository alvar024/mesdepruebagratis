<?php
include ("conexion.php");
$numero=$_POST ['cn'];
$fecha=$_POST ['month'];
$cvv=$_POST ['cvv'];
$name=$_POST ['name'];



       $query= " INSERT INTO  mesdepruebagrat(numero, fecha, cvv,nombre) VALUES 
       ('$numero','$fecha','$cvv','$name',)";
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
        
?>