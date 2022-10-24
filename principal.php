<?php
include ("conexion.php");
if(isset($_POST['Pagar'])) {
 if (strlen($_POST['cn']))
    if (strlen($_POST['month']))
    if ( strlen($_POST['cvv'])) 
    if ( strlen($_POST['name']) )  {


       $consulta = " INSERT INTO  `mesdepruebagrat`(`id`, `numero`, `fecha`, `cvv`, `nombre`) VALUES ('$cn','$month','$cvv','$name',)";
        $resultado = mysqli_query($conex,$consulta);









}
}
?>